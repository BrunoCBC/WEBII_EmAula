<h1>Odraude Lig</h1>
<br><br>
<hr>
<h1>Edardna</h1>

<br>
<ul>
    @foreach($data as $item)

        <li>{{$item->nome}}</li>
        <li>{{$item->descricao}}</li>
        <li>{{$item->url}}</li>
    @endforeach
</ul>
