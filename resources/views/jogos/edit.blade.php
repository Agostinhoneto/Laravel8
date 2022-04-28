@extends('layouts.app')
@section('content')
@section('title','Edição')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container">
      <br>
      <h1>Editar Jogo</h1>
        <hr>
        <form action="{{route('jogos-store')}}" method="POST">
          @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input type="text" class="form-control" name="nome" value="{{$jogos->nome}}" placeholder="Digite um Nome...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">Categoria: </label>
              <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite um categoria...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">Ano de Criação: </label>
              <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite um Ano Criacao...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">valor: </label>
              <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite um valor...">
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-success">
            </div>
          </div>
        </form>
    </div>
@endsection