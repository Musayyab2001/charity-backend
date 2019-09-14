<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/urkunde.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="gradient_bg h_35"></div>

    <div class="top_heading">Laufen, Begegnen,Helfen!</div>
    <div class="gradient_bg h_15"></div>
    <div class="gradient_bg urkunde">
        <h1>Urkunde</h1>
    </div>
    <div class="gradient_bg h_15"></div>
    <div class="cw_logo"><img src="{{ asset('images/Icon.png') }}" alt="Charity Walk Logo" /></div>
    <div class="cw_info_blue">
        <h2>{{$userErgebniss->lauf}}</h3>
            <h2>- {{$userErgebniss->datum}} -</h3>
    </div>
    <div class="runner_info">
        <h2 class="cw_year">2019</h2>
        <p>{{$userErgebniss->name}}</p>
        <p>erreichte beim {{$userErgebniss->lauf_strecke}} km Lauf eine Zeit von</p>
        <p>{{$userErgebniss->netto_zeit}}</p>
        <div class="runner_3_details">
            <span>Gesamtwertung {{$userErgebniss->gesamt_pl}}.</span>
            <span>{{$userErgebniss->AK}} {{$userErgebniss->AKPl}}.</span>
            <span>{{strtoupper($userErgebniss->m_w)}} {{$userErgebniss->MWPl}}</span>
        </div>
    </div>
    <div class="signature">
        <div class="sign">
            <!-- <img src="sign.png" alt="Mubariz Javaid Signature" /> -->
            <h3>Mubariz Javaid</h3>
        </div>
        <div class="sign_bottom">
            <p>Abteilungsleiter für Humanitäre Arbeit</p>
            <p>Ahmadiyya Muslim Jugendorganisation</p>
            <p>Genfer Straße 11a</p>
            <p>60437 Frankfurt am Main</p>
        </div>
    </div>

    <div class="gradient_bg h_35 sticky_bottom">
        <p class="site_link_bottom">charity-walk.info</p>
    </div>
</body>

</html>
