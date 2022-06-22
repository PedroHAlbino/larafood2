@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plan.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <p>Lista de Planos.</p>
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
           
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Ações</th>
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
                            <td>
                                <a href="" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            
        </div>
    </div>
@stop
