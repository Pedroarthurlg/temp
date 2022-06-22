@extends('restrict')

@section('content')

<div>
    <a href="{{url('topico/create')}}" class="button">Adicionar</a>
</div>
<table>
    <thead>
        <tr>
            <th>Tópico</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        @foreach($topicos as $topico)
        <td>{{$topico->topico}}</td>
        <td>
            <a href="{{route}}"></a>
        </td>
    </tbody>
</table>