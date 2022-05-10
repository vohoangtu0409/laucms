@php
    //dump($home, $settings, $session);
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('home::layout.style')
    @stack('style')
</head>
<body>
@include('home::layout.header')
@yield('content')
@include('home::layout.script')
@stack('script')
</body>
</html>