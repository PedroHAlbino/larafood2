@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Planos</h1>
@stop

@section('content')
    <form action="{{ route('plan.store') }}" class="form" method="POST">
       @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome:">
            </div>
            <div class="form-group">
                <label>Preço</label>
                <input type="number" name="price" class="form-control" placeholder="Preço:">
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="description" class="form-control" placeholder="Descrição:">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>       
    </form>
    
@stop
