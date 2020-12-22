<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello</title>
    <style>
       .email{
           font-family:Verdana, Geneva, Tahoma, sans-serif;
           background:#ffff;
           padding:10px 15px;
           border:1px solid #eeee;
       }

       .email h3{
           font-weight:500;
           font-size:20px;
       }

       .email p{
        color:#333;
        font-size:15px;
        margin:5px 0 !important;
       }


       .email h5{
           margin-bottom:5px !important;
       }

       .email ul{
           list-style-type: square;
            padding:0;
            margin:0;
            margin-top:10px;
       }

       .email .total-price ul{
            border-top:1px dashed #444;
            margin-top:5px;
            padding-top:20px;
       }

       .email .footer{
           margin-top:20px;
       }

       .email .laxial-image{
           width:70px;
           height:70px;
           margin-top:20px;
       }
    </style>
</head>
<body>

    <section class="email">
        <div class="header">
            <h3 class="title">Bonjour {{$details['client_name']}}</h3>
        </div>
        <div class="body">
            <div class="offer-name">
                  <p>
                    vous avez choisi la <span class="color">{{$details['offer_name']}}</span>
                    qui comprends :
                  </p>
                  <p>
                    la licence , l'installation et l'hébergement du logiciel.
                  </p>
            </div>
            @if (count($details['extra'])>0)
            <h5 style="margin-bottom:0 !important">les extra services que vous avez choisi:</h5>
            <ul style="margin-bottom:8px !important">
                @foreach ($details['extra'] as $extra)
                <li>{{$extra}}.</li>
                @endforeach
            </ul>
            @endif
            <div class="total-price">
              vous avez choisi la version complète de laxial qui comprends
                <h5>le prix total comprand : </h5>
                <ul>
                    <li>Le nombre des élèves choisi (<span class="color">{{$details['nb_students']}} </span> élèves).</li>
                    <li>le prix initial de l'offre ({{ $details['price_init'] }}). </li>
                    <li>le prix de traitement des injections des listes et l'utilisation des applications mobiles et IOS ({{$details['tarif']}} /élève).</li>
                    @if (count($details['extra'])>0)
                        <li>le prix des modules de l'extra ({{$details['modules_price']}}).</li>
                    @endif
                    <li>total: <span class="color">({{$details['total_price']}}).</span> </li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <p>
                Merci de la confiance que vous nous avez témoigné en choisissant notre service.
            </p>
        </div>
        <img src="{{url('images/laxial.ico')}}" class="laxial-image" alt="laxial image">
    </section>

    </body>
</html>
