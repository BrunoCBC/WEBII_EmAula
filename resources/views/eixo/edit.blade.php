@extends('templates.main', ["titulo" => "Alterar Eixo", "header" => "Modificar Eixo"])

@section('content')
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.update', $eixo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{$eixo->nome}}"><br>
        <textarea name="descricao" cols="30" rows="6">{{$eixo->descricao}}</textarea><br>
        <input type="submit" value="Salvar">
    </form>
@endsection