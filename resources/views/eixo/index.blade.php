@extends('templates.main', ["titulo" => "Tabela de Eixos", "header" => "Tabela de Eixos"])

@section('content')
    <hr>
    @can('create', App\Models\Eixo::class)
        <a href="{{route('eixo.create')}}">Cadastrar</a>
        <hr>
    @endcan
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÂO</th>
            <th>AÇÔES</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->descricao}}</td>
                    <td><a href="{{route('eixo.report')}}" target="_blank">Relátorio</a></td>
                    <td><a href="{{route('eixo.graph')}}">Gráfico</a></td>
                    <td>
                        <a href="{{route('eixo.show', $item->id)}}">Info</a>
                        @can('edit', App\Models\Eixo::class)
                            <a href="{{route('eixo.edit', $item->id)}}">Alterar</a>
                        @endcan
                        @can('destroy', App\Models\Eixo::class)
                            <form action="{{route('eixo.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Deletar">
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection