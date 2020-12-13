<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Mail\clientMail;
use App\Mail\adminMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function newOffer(Request $request)
    {

        $extraServices = $request->extraServices;
        array_shift($extraServices);

        $extra = "";
        foreach ($extraServices as $extraService) {
            if ($extraService == "7800" || $extraService == "780") {
                if ($request->lang == "ar") {
                    $extra .= "/[ frais en extra ( 7.800 MAD ) ]/";
                } else {
                    $extra .= "/[ frais en extra ( 7.80€  ) ]/";
                }
            } elseif ($extraService == "2500" || $extraService == "250") {
                if ($request->lang == "ar") {
                    $extra .= "/[ bibliothèque  en extra ( 2.500 MAD ) ]/";
                } else {
                    $extra .= "/[ bibliothèque  en extra ( 250€  ) ]/";
                }

            } elseif ($extraService == "1500" || $extraService == "150") {
                if ($request->lang == "ar") {
                    $extra .= "/[ transport  en extra ( 1.500 MAD ) ]/";
                } else {
                    $extra .= "/[ transport  en extra ( 150€  ) ]/";
                }
            } elseif ($extraService == "3500" || $extraService == "350") {
                if ($request->lang == "ar") {
                    $extra .= "/[ rapport  en extra ( 3.500 MAD ) ]/";
                } else {
                    $extra .= "/[ rapport  en extra ( 350€  ) ]/";
                }
            } elseif ($extraService == "2000" || $extraService == "200") {
                if ($request->lang == "ar") {
                    $extra .= "/[ personnele  en extra ( 2.000 MAD ) ]/";
                } else {
                    $extra .= "/[ personnele  en extra ( 200€  ) ]/";
                }
            }
        }

        $rules = [
            'society_name' => 'required|string|min:4',
            'client_email' => "required|email",
            'nb_students' => "required|integer|min:" . $request->min_nbStudents,
        ];

        $niceNames = [
            "society_name" => "nom de societe",
            "client_email" => "email du client",
            "nb_students" => "nombre des éleves",
        ];

        $messages = [
            "min" => "Le Nombre Minimum Des Elèves est: " . $request->min_nbStudents . " Elève(s)",
        ];

        $data = $this->validate($request, $rules, $messages, $niceNames);

        $order = new Order();
        $order->nom = $request->society_name;
        $order->email = $request->client_email;
        $order->langue = $request->lang;
        $order->min_eleves = $request->min_nbStudents;
        $order->max_eleves = $request->max_nbStudents;
        $order->nombre_eleves = $request->nb_students;
        $order->plan_choisie = $request->plan_name;
        $order->prix_total = $request->lang == 'ar' ? $request->total_price . "MAD" : $request->total_price . '‎€';
        $order->formation_en_ligne = $request->formation_en_ligne == true ? "Oui" : "Non";
        $order->extra_services = $extra;

        $order->save();

        if ($extra != '') {
            $extra = trim($extra, '/ ');
            $extra = explode('//', $extra);
        }else{
            $extra = [];
        }

        $mailDetails = [
            "client_name" => $order->nom,
            "offer_name" => $order->plan_choisie,
            "nb_students" => $order->nombre_eleves,
            'total_price' => $order->prix_total,
            "lien" => url("/admin/orders/" . $order->id),
            "extra" => $extra,
        ];

        Mail::to([$order->email])->send(new clientMail($mailDetails));
        Mail::to("sarah@connectivemarket.com")->send(new adminMail($mailDetails));

        return response()->json(["order" => $order, 'msg' => 'Votre order a été créée avec succès']);

    }
}
