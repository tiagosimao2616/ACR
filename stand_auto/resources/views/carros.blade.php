@extends('layouts.layout')

@section('content')
    <h1>Carros</h1>
    @foreach ($carros as $carro)
        <div class="carro">
            <a herf="/carros/{{$carro['id']}}">
            <img src="{{$carro['img']}}" alt="img/carros">
            <p>{{$carro['nome']}}</p>
</a>
        </div>
    @endforeach
@endsection