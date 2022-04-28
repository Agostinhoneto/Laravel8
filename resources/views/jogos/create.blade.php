@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container">
      <h1>Criar novo Jogo</h1>
        <hr>
        <form action="{{route('jogos-store')}}" method="POST">
          @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input type="text" class="form-control" name="nome" placeholder="Digite um Nome...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">Categoria: </label>
              <input type="text" class="form-control" name="categoria" placeholder="Digite um categoria...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">Ano de Criação: </label>
              <input type="number" class="form-control" name="ano_criacao" placeholder="Digite um Ano Criacao...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">valor: </label>
              <input type="number" class="form-control" name="valor" placeholder="Digite um valor...">
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
    </div>
@endsection