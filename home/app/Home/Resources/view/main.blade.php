@inject('seo', "App\Packages\Shared\Models\Seo")

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('build/app.css') }}">
    @stack('styles')
</head>
<body>

@yield('content')

<script src="{{asset('build/runtime.js')}}" defer></script>
<script src="{{ asset('build/app.js') }}" defer></script>

@stack('javascript')

</body>
</html>