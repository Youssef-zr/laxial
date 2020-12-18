<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello</title>
    <style>
       .email{
           text-transform: capitalize;
           font-family:Verdana, Geneva, Tahoma, sans-serif;
           background:#ffff;
           padding:10px 15px;
           border:1px solid #eeee;
       }

       .email h3{
           color:#08acfd;
           font-weight:500;
           font-size:20px;
       }

       .email p{
        color:#333;
        font-size:15px;
        margin:5px 0 !important;
       }
       .email .color{
           color:#9bc31c
       }

       .email h5{
           margin-bottom:5px !important;
       }

       .email ul{
           margin-top:0px;
           list-style-type: square;
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
                    qui comprends la licence , linstallation et lhébergement du logiciel.
                </p>
            </div>
            @if (count($details['extra'])>0)
            <h5 style="margin-bottom:0 !important">les extra services que tu as choisi:</h5>
            <ul style="margin-bottom:8px !important">
                @foreach ($details['extra'] as $extra)
                <li>{{$extra}}.</li>
                @endforeach
            </ul>
            @endif
            <hr>
            <div class="total-price">
                <ul>
                    <li>Le nombre des élèves choisi ( <span class="color">{{$details['nb_students']}} </span> élèves ).</li>
                    <li>le prix Initial de loffre ( {{ $details['price_init'] }} ) </li>
                    <li>le prix de traitement des injection des listes et lutilisation des application mobile et IOS ( {{$details['tarif']}} )/elève.</li>
                    @if (count($details['extra'])>0)
                        <li>le prix des module de lextra ( {{$details['modules_price']}} ).</li>
                    @endif
                    <li>le montant total : <span class="color">( {{$details['total_price']}} ).</span></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <p>
                Merci De Choisir Notre Service, Cordialement Léquipe Connective Market
            </p>
        </div>
        <img src="{{url('images/laxial.ico')}}" alt="laxial image">
    </section>

    </body>
</html>
