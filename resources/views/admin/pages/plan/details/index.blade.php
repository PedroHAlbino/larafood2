@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('plan.index') }}">Dashboard</a>
                </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('plan.show', $plan->url) }}">{{$plan->name}}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('details.plan.index',$plan->url) }}">Detalhes do {{$plan->name}}</a>
            </li>
        </ol>
    </nav>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th width="150">Ações</th>
                        </tr>

                    </thead>
                    @foreach ($details as $detail )
                    <tbody>
                        <tr>
                            <td>
                                {{ $detail->name }}
                            </td>

                            <td style="width: 10px;">
                                <a href="{{ route('plan.edit', $detail->url) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('plan.show', $detail->url) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>

        </div>
    </div>
@stop
