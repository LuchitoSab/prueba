<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
   
@section ('header')
<h1> Hola probando esto </h1>
@show



@section('footer')
<hr>
<h1> hola esto es el pie </h1>
@show
</body>
</html>
