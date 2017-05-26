<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset("css/all.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .quicklinks li{
            display: block !important;
        }

        .quicklinks{
            padding: 10px;
            border-radius: 10px;
            border: thin solid #42b983;
            width: 13%;
            position: fixed;
            bottom: 2%;
            left: 2%;
            line-height:22pt;
        }
    </style>
</head>
<body>
<nav class="center black">
    <a href="/">Startseite</a>
</nav>
<div id="app" v-cloak>

    @yield("content")

</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>