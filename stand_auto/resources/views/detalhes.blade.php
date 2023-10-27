@extends('layouts.layout')

@section('content')
    <h1>Detalhes da viatura</h1>
    @if (isset($carro))
        <div calss="carro">
            <img src="{{$carro['img']}}" alt="/img/carros">
            <p>Nome: {{$carro['nome']}}</p>
            <p>Description: {{$carro['desc']}}</p>
            <a href="/carros">Voltar para as viaturas</a>
        </div>

    @else
        <h1>A viatura não existe!</h1>
        <a href="/carros">Voltar para as viaturas</a>
    @endif
@endsection