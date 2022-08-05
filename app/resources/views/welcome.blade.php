<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NUOVOWEB - Realizzazione applicazioni web</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            P {
            font-weight:600;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 14px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
             <p class="mssg">{{ session('mssg') }}</p>
            <div class="content">
                

                <div class="links">
                    <a href="https://test-whiteboard.herokuapp.com/?roomID=397" target="_blank">Lavagna interattiva condivisa</a>
                    <a href="https://webrtc-promocm.herokuapp.com/" target="_blank">VIDEO/AUDIO CHIAMATE FREE</a>
                    <a href="https://vrobbi-signalmaster.herokuapp.com/geolocation2/?room=2186" target="_blank">GEOLOCALIZZAZIONE LOCALE E REMOTA</a>
                    <a href="http://www.canaledisecchia.it" target="_blank">Sito responsive recente</a>
                    
                </div>
                <div class=" m-b-md">
                <example-component></example-component>
                <p>
                    Realizzo applicazioni interattive principalmente con le seguenti tecnologie:<br />
                    PHP 5/7 (Wordpress, Laravel, Yii2) su database mysql<br />
                    NODE.JS  Applicazioni reattive con javascript lato server<br />
                    VUE.JS , ANGULAR.JS<br />
                    WEBRCT (tecnologia implementata sul browser che consente di realizzare video/audio chiamate dirette)<br />
                    <a href="mailto:info@nuovoweb.eu">Per info: info@nuovoweb.eu</a>
                </p>
                </div>
            </div>
        </div>
    </body>
</html>