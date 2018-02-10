<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - NEOBET - Borderless Betting Blockchain</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        {{--  <div class="container">
            <header id="hearder">
                <navigator></navigator>
            </header>
            <router-view></router-view>
        </div>  --}}
        <app></app>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>