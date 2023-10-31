@extends('layouts.app')

@section('title','criação')

@section('content')

    <div class="container mt-5">
        <h1>crie um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="digite um nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" placeholder="digite a categoria do jogo">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de creação:</label>
                    <input class="form-control" type="number" name="ano_criacao" placeholder="ano de criação">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" name="valor" placeholder="digite o valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>        
    </div>
@endsection