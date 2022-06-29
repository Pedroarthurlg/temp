@extends('restrict.layout')

@section('content')
@if (count($error) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @enddforeach
</ul>
@endif
<form action="POST" action="{{url('topico'}}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div>
        <label for="Tópico"></label>
        <input type="text" name="topico" id="topico" value="{{ old(topico) }}" required />
    </div>
    <button type="submit" class="button">Salvar</button>
</form>
@endsection