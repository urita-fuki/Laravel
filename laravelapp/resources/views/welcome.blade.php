<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>マイページ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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

            .flex-center {
            }
            .position-ref {
                position: absolute;
                left: 600px;
                top: 200px;
            }

            .title {
                font-size: 50px;
            }

            .m-b-md {
                position: absolute;
                right: 10px;
                top: 0px;
            }

            .one{
                position: absolute;
                left: 600px;
                top:  150px;
            }

            .two{
                position: absolute;
                left: 600px;
                top:  300px;
            }

            .three{
                position: absolute;
                left: 30px;
                top:  10px;
            }

            .fou{
                position: absolute;
                left: 630px;
                top:  200px;
            }

            .five{
                position: absolute;
                left: 630px;
                top:  350px;
            }

            .five{
                position: absolute;
                left: 630px;
                top:  350px;
            }

            .naiyou1{
                position: absolute;
                left: 400px;
                top:  350px;
            }

            .naiyou2{
                position: absolute;
                right: 400px;
                top:  350px;
            }

        </style>
    </head>
    <body>
        @if (Route::has('login'))
            @auth
                <div class="three">
                    <a href="{{ url('/home') }}">ログアウト</a>
                </div>
            @else
                <div class="one">
                    <p>ログインはこちら</p>
                </div>
                <div class="two">
                    <p>初めてに方はこちら</p>
                </div>
                <div class="fou">                            
                    <a href="{{ route('login') }}">ログイン</a>
                </div>
            @if (Route::has('register'))
                <div class="five">
                    <a href="{{ route('register') }}">新規登録</a>
                </div>
            @endif
            @endauth
        @endif

        <div class="content">
            <div class="title m-b-md">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">マイページ</a>
                    @else
                        <a href="{{ route('login') }}">ログインor新規作成画面</a>
                    @endauth
                @endif
            </div>                
        </div>    

        <div class="links">
            @auth 
                <div class="naiyou1">
                    <a href="https://www.youtube.com/">Youtube</a>
                </div>
                <div class="naiyou2">
                    <a href="https://weather.yahoo.co.jp/weather/">お天気</a>
                </div>
            @endauth
        </div>
    </body>
</html>
