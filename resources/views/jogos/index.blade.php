@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-5"> 
  <table class="table">
    <thead>
      <h1>Listagem de Jogos</h1>
      <hr>
      <br>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Criação</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jogos as $jogo )
      <tr>
        <th>{{$jogo->id}}</th>
        <th>{{$jogo->nome}}</th>
        <th>{{$jogo->categoria}}</th>
        <th>{{$jogo->ano_criacao}}</th>
        <th>{{$jogo->valor}}</th>
        <th>
          <a href="{{ route('jogos-edit', ['id'=>$jogo->id])}}">Editar</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <a href="{{route('jogos-create')}}" class="btn btn-primary">Add Novo Jogo</a> 
</div>  
@endsection