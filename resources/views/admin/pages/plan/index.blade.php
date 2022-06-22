@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>  
            </li>
            <li class="breadcrumb-item active">
            <a href="{{ route('plan.index') }}">Planos</a>
            </li>       
        </ol>
    </nav>

    <h1>Planos <a href="{{ route('plan.create') }}" class="btn btn-dark">ADD</a></h1>
    
   

@stop

@section('content')
    <p>Lista de Planos.</p>
    <div class="card">
        <div class="card-header">
           <form action="{{ route('plan.search') }}" class="form form-inline" method="POST">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control">
            <button type="submit" class="btn btn-dark">Filtrar</button>
           </form>
        </div>
        <div class="card-body">
           
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th width= 150;>Ações</th>
                        </tr>

                    </thead>
                    @foreach ($plans as $plan )
                    <tbody>
                        <tr>
                            <td>
                                {{$plan->name}}
                            </td>
                            <td>
                                {{ number_format($plan->price, 2)}}
                            </td>
                            <td style="width: 10px;">
                                <a href="{{ route('plan.edit', $plan->url) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('plan.show', $plan->url) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            
        </div>
    </div>
@stop
