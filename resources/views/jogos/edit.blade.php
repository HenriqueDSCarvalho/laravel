@extends('layouts.app')

@section('title','ediçao')

@section('content')

    <div class="container mt-5">
        <h1>editar jogo</h1>
        <hr>
        <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">nome:</label>
                    <input class="form-control" type="text" name="nome" value="{{ $jogos->nome }}" placeholder="digite um nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" value="{{ $jogos->categoria }}" placeholder="digite a categoria do jogo">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de creação:</label>
                    <input class="form-control" type="number" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="ano de criação">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" name="valor" value="{{ $jogos->valor }}" placeholder="digite o valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="atualizar">
                </div>
            </div>
        </form>        
    </div>
@endsection