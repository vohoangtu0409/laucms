<!DOCTYPE html>
<html
        lang="{{ $lang }}">
<head>
    @include('home::partials.seo')
    @include('home::layout.css')
</head>
<body>
@include('home::layout.seo')
@include('home::layout.header')
@include('home::layout.menu')
@include('home::layout.mmenu')
    @if($source =='index')
        @include('home::layout.slide')
    @endif
    @if($source !='index')
        @include('home::layout.breadcrumb')
    @endif
    <div id="main" class="wrap-main">
        @include('home::'.$template.'_tpl')
    </div>
        @include('home::layout.footer')
        @include('home::layout.modal')
        @include('home::layout.js')
    @if($deviceType =='mobile')
        @include('home::layout.phone')
    @endif
</body>
</html>