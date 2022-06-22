@extendends('restrict.layout')

@section('content')
<div>
    <a href="{{url('mensagen/create')}}" class="button">Adicionar</a>
</div>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Título</th>
            <th>Mensagem</th>
            <th>Tópicos</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mensagens as mensagem)
        <tr>
            <td>{{$mensagem->user->name}}</td>
            <td>{{$mensagem->titulo}}</td>
            <td>{{$mensagem->mensagem}}</td>
            <td>
                @if($mensagem->topicos)
                @foreach($mensagem->topicos as $topico)
                <div>{{$topico->topico}}</div>
                @endforeach
                @endif
            </td>
            <td>
                <a href="{{route('mensagem.edit', $mensagem->id)}}" class="button">
                    Editar
                </a>
            </td>
            <td>
                <form action="POST" action="{{route('mensagem.destroy', $mensagem->id)}}" onsubmit="return confirm('tem certeza?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">
                        Remover
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection