@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->description}}</p><br>
    <b>Author: {{$post->user->name}}</b>

    <a href="{{url("/post/$post->id/update")}}">Editar</a>

    <hr>


    @empty
      <p>Nenhum Post Cadastrado!</p>


    @endforelse
</div>
@endsection
