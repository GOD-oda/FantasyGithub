<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FantasyGithub</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="background">
            <div class="container">
                <div class="intro-area">
                    <div class="intro-box">
                        <span class="intro-element valign"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hide introduction">
            <p>
                ようこそ、FantasyGithubの世界の入り口へ。<br><br>
                ここはファンタジーなGITHUBの世界です。<br>
                COMMITが縦横無尽に駆け巡り、PULL REQUESTが飛び交う世界。<br><br>
                あなたがFantasyGithubで行動すれば自ずとあなた自身を成長させることでしょう。<br><br>
                今こそ新しい扉を開く時です。<br>
                素晴らしい世界でお会いできることを楽しみにしています。<br><br>
                <a href="{{ url('register') }}" class="btn btn-lg open-door">扉を開く</a><a href="#" class="btn btn-lg close-door">扉を閉じる</a>
            </p>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
