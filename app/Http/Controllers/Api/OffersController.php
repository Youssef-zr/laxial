<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function newOffer(Request $request)
    {
        $rules = [
            'society_name' => 'required|min:4',
            'client_email' => "required|email",
            'nb_students' => "required|integer",
        ];

        $niceNames = [
            "society_name" => "nom de societe",
            "client_email" => "email du client",
            "nb_students" => "nombre des éleves",
        ];

        $data = $this->validate($request, $rules,[],$niceNames);

    }
}
