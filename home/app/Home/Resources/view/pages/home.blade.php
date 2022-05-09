@extends("home::main")

@section('pageTitle')
    {{ __('home::index.title',[
    'title' => 'Of Index'
]) }}
@endsection

@section('content')
<h1>Hoàng TÚ</h1>
@endsection