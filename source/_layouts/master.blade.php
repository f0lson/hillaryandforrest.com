<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('meta-title')</title>
</head>

<body>
<div id="top"></div>
@include('_global/header')

@yield('content')

@include('_global.footer')
</body>
</html>