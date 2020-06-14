<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- <title>{{ config('app.name', 'Laravel') }}</title>-->

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
    <style>
        .item1 { grid-area: lpvc; }
        .item2 { grid-area: actualite; }
        .item3 { grid-area: lfa; }
        .contenu{
            display: grid;
            grid-template-areas:
            'lpvc'
            'actualite actualite actualite actualite '
            'lfa';
            grid-gap: 10px;
            background-color: transparent;
            padding: 10px;
        }
        
        .item1 { grid-area: contenup; }
        .item2 { grid-area: pp; }
        .ap{
            display: grid;
            grid-template-areas:
            'contenup contenup contenup '
            'pp ';
            grid-gap: 10px;
            background-color: transparent;
            padding: 10px;
        }
        .navbar{
            font-size: 15px;
            color: whitesmoke !important;
        }
        .b{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
        }
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

            .onoffswitch3{
                position: relative; 
                -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
            }

            .onoffswitch3-checkbox {
                display: none;
            }

            .onoffswitch3-label {
                display: block; overflow: hidden; cursor: pointer;
                border: 0px solid #999999; border-radius: 0px;
            }

            .onoffswitch3-inner {
                display: block; width: 200%; margin-left: -100%;
                -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
                -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
            }

            .onoffswitch3-inner > span {
                display: block; float: left; position: relative; width: 50%; height: 30px; padding: 0; line-height: 30px;
                font-size: 14px; color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;
                -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
            }

            .onoffswitch3-inner .onoffswitch3-active {
                padding-left: 10px;
                background-color: #EEEEEE; color: #FFFFFF;
            }

            .onoffswitch3-inner .onoffswitch3-inactive {
                width: 100px;
                padding-left: 16px;
                background-color: #EEEEEE; color: #FFFFFF;
                text-align: right;
            }

            .onoffswitch3-switch {
                display: block; width: 50%; margin: 0px; text-align: center; 
                border: 0px solid #999999;border-radius: 0px; 
                position: absolute; top: 0; bottom: 0;
            }
            .onoffswitch3-active .onoffswitch3-switch {
                background: #27A1CA; left: 0;
                width: 160px;
            }
            .onoffswitch3-inactive{
                background: #A1A1A1; right: 0;
                width: 20px;
            }
            .onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
                margin-left: 0;
            }

            .glyphicon-remove{
                padding: 3px 0px 0px 0px;
                color: #fff;
                background-color: #000;
                height: 25px;
                width: 25px;
                border-radius: 15px;
                border: 2px solid #fff;
            }

            .scroll-text{
                color: #000;
            }
            .ftr    {
                margin-top: 280px;
                background-color: rgba(30, 30, 30, 0.97);
                height: auto;
            }
            .ftr h5 b{
                color: #006daa;
            }
            .ftr h5 b li a{
                color: white    ;
            }
            .isetdesc{
                color: whitesmoke;
                margin-left: 10px
            }
            .contact{
                color: white;
                margin-left: 4px;
            }
            .row{
                margin-bottom: 50px;
                margin-bottom: 0;
            }
            .profile-pic:hover{
                opacity: 70%
            }
            .dropdown-toggle{
                color: #e4e8eb !important;
                font-family: Verdana, Geneva, Tahoma, sans-serif
            }
            .nav-link{
                font-size: 12px;
                color: #e4e8eb !important;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            .nav-link:hover{
                color: #b3e8fc !important;
            }
            
            .actcontenu{
                background-color: #95ddf0;
            }
            #dashbord{
                color: black !important;
            }

    </style>
</head>
<body>
    <div id="app">
            <!-- <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: #006daa;"> -->
            <nav class="navbar navbar-light" style="background-color: #006daa;">
                <div class="container">
                    <div class="sociel-links">
                    <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="https://i.pinimg.com/originals/25/9f/1b/259f1bf84989d07005bad20044448530.png" alt="logo facebook" width="30px" style="border-radius: 50%"> </a> </i>
                            <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="https://cdn.pixabay.com/photo/2017/08/23/11/30/twitter-2672572_960_720.jpg" alt="logo twitter" width="30px" style="border-radius: 50%"></a></i>
                            <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="data:image/png;base64,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" alt="logo google plus" width="30px" style="border-radius: 50%"></a></i>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="  my-2 my-sm-0" type="submit" style="border-radius: 10%"><img src="https://p7.hiclipart.com/preview/928/549/87/magnifying-glass-computer-icons-magnification-loupe.jpg" alt="serch logo" style="width: 30px;height: 30px;"></button>
                            </form>
                </div>
            </nav>
            <div class="test" style="padding-top: 20px;padding-bottom: 20px">               
                        <div class="header-main container" style="display: flex">
                            <h1 class="logo col-md-4 col-sm-4">
                                <table>
                                    <tbody><tr>
                                        <td>
                                            <a href="http://www.mes.tn/" target="_blank"><img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/338px-Flag_of_Tunisia.svg.png" alt="Logo" width="40" height="30"></a>
                                        </td>
                                        <td style="text-align:center;">
                                            <a href="http://www.mes.tn/" target="_blank" style="text-decoration: none"><h6>République Tunisienne<br>&nbsp;&nbsp;&nbsp;&nbsp;Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</h6></a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </h1><!--//logo-->
                            <h1 class="logo col-md-4 col-sm-4">
                                <div class="contact pull-left">
                                    <table style="margin-right:50px;" width="100%">
                                    <tbody><tr>
                                        <td><h6 style="color: black">
                                            <i class="fa fa-phone"></i> +216 72 570 601 
                                        </h6></td>
                                        <td ><h6 style="color: black">
                                            <i class="fa fa-fax"></i> +216 72 572 455
                                        </h6></td>
                                    </tr>
                                    <tr style="text-align: right;">
                                        <td>
                                            <ul class="menu-top navbar-right hidden-xs">
                                                <li class="divider" style="list-style:none;font-size: 12px;"><a href="" style="color: #f4c312;text-decoration: none;">EN</a>
                                                 <SPAN style="color: black">|</SPAN> <a href="" style="color: #f4c312;text-decoration: none;">AR</a></li>
                                            </ul>
                                        </td>
                                    </tr><!--//menu-top-->
                                    </tbody></table>
                                </div><!--//contact-->
                            </h1><!--//info-->
                            <h1 class="logo col-md-4 col-sm-4">
                                <table>
                                    <tbody><tr>
                                        <td style="text-align: center;">
                                            <h6><a href="/" target="_blank" style="text-decoration: none">Iset Bizerte</a><br><a href="/" style="text-decoration: none">Institut Supérieur des Etudes Technologiques de Bizerte</a></h6>
                                        </td>
                                        <td>
                                            <a href="/"><img id="logo" src="http://1.bp.blogspot.com/-sUt9UH6SPbw/UM7RWT2u8OI/AAAAAAAAAB4/J9rnvMUdE28/s200/logo+iset.jpg" alt="Logo ISETB" width="53" height="51"></a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </h1><!--//logo-->
                        </div><!--//header-main-->
            </div>
            <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #3ea5de">
                <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Projet_Partenaire_Stage') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link">Accueil</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/nouveaute" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Nouveautés
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/nouveaute">Manifestations scientifiques</a>
                                        <a class="dropdown-item" href="#">Manifestations professionnelle</a>
                                        <a class="dropdown-item" href="#">agenda des évenements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/institut" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Institut                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/institut">Loi de création</a>
                                        <a class="dropdown-item" href="#">Batimant</a>
                                        <a class="dropdown-item" href="#">Organigrame</a>
                                        <a class="dropdown-item" href="#">En chifres</a>
                                        <a class="dropdown-item" href="#">Infrastructure</a>
                                        <a class="dropdown-item" href="#">Conseil scientifique</a>
                                        <a class="dropdown-item" href="#">Enseignents</a>
                                        <a class="dropdown-item" href="#">Visite virtuelle</a>
                                        <a class="dropdown-item" href="#">Gallerie des photos</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/departement" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Département                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="departement">Technologie de l'informatique</a>
                                        <a class="dropdown-item" href="#">Génie électrique</a>
                                        <a class="dropdown-item" href="#">Science économiques et de gestion</a>
                                        <a class="dropdown-item" href="#">Génie de procédés</a>
                                        <a class="dropdown-item" href="#">Génie mécanique</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('demande.index') }}" class="nav-link">Offres</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/formation" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Formation                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/formation">Organigramme</a>
                                        <a class="dropdown-item" href="#">Admission</a>
                                        <a class="dropdown-item" href="#">Licences appliquées</a>
                                        <a class="dropdown-item" href="#">Licences co-construites</a>
                                        <a class="dropdown-item" href="#">E-learning</a>
                                        <a class="dropdown-item" href="#">Candidature de mastére</a>
                                        <a class="dropdown-item" href="#">Candidature licence co-construite</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/vietude" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vie etudiants                                      
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/vietude">Clubs</a>
                                        <a class="dropdown-item" href="#">Manifestations</a>
                                        <a class="dropdown-item" href="#">Activités sportives</a>
                                        <a class="dropdown-item" href="#">Activités culturelles</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/contact" class="nav-link">Contact</a>
                                    </li>
                                    </ul>
  

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
            </nav>
            <br>
            @auth
                                            @admin
                            
                            <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #222831" style="margin-left: 400px;">
                            <a class="navbar-brand" href="{{ url('/') }}" style="color: #f4c312">
                                Panneau de configuration ISETB
                            </a>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                            <a href="{{ route('etudiant.index') }}" class="nav-link" >Etudiant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('stage.index') }}" class="nav-link"  >Stage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('societe.index') }}" class="nav-link" >Societe</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('demande.index') }}" class="nav-link" >Demande</a>
                                        </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                            <a href="{{ url('/') }}" class="nav-link" >Mettre à jour des evenements</a>
                                        </li>
                            </ul>
                                @elseadmin 
                                    
 
                                @endadmin   
                            
                        @endauth
                            </nav>
                    <main class="py-4">
                        <div class="container">
                            @yield('content')
                        </div>                        
 
                    </main>
                    <footer class="ftr">
                        <div class="container py-5">
                            <div class="row">
                            <div class="col-12 col-md" > <b style="color: #3ea5de"><span style="color: #f4c312">Iset</span> bizerte</b>
                            <span class="isetdesc">
                                    est un établissement public à caractère scientifique et technologique. Sa principale mission consiste à contribuer
                                    au développement socio-économique et au transfert technologique dans la région Bizerte ainsi que le renforcement de 
                                    l'employabilité l’insertion professionnelle des diplômés de l’enseignement supérieur.
                            </span>
                            <small class="d-block my-3 text-muted">
                                            Copyright © ISET Bizerte
                                            2019-2020</small> </div>
                      
                            <div class="col-6 col-md">
                                <h5><b><span style="color: #f4c312">R</span>esources</b></h5>
                                <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Ministère ESRS</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Université du Carthage</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Inscription.tn</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Orientation.tn</a>
                                </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md">
                                <h5><b><span style="color: #f4c312">C</span>ontact</b></h5>
                                <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#"><b>Adresse</b></a>
                                    <span class="contact">Campus Universitaire Menzel Abderrahmen BP n° 65 Bizerte 7035</span>
                                </li>
                                <li>
                                    <a class="text-muted" href="#"><b>CP</b></a>
                                    <span class="contact">7035</span>
                                </li>
                                <li>
                                    <a class="text-muted" href="#"><b>Tél</b></a>
                                    <span class="contact">+216 72 57 06 01 <br> +216 72 57 06 00</span>
                                </li>
                                <li>
                                    <a class="text-muted" href="#"><b>Fax</b></a>
                                    <span class="contact">+216 72 572 455</span>
                                </li>
                                <li>
                                    <a class="text-muted" href="#"><b>Email</b></a>
                                    <span class="contact">isetbz@isetbz.rnu.tn </span>
                                </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md">
                                <h5><b><span style="color: #f4c312">A</span>bout</b></h5>
                                <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Team</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Locations</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md">
                                <h5><b><span style="color: #f4c312">N</span>ewsliter</b></h5>
                                <ul class="list-unstyled text-small">
                                <li style="display: flex">
                                    <input type="email" placeholder="Entrez votre email">
                                    <input type="button" value="Envoyer" style="border: 0;background-color: #2c7596">
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </footer>
                    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
           /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
            *et d'appliquer les styles de validation aux différents éléments de formulaire*/
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>
</body>
</html>
