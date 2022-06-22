@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Planos</h1>
@stop

@section('content')
    <form action="{{ route('plan.update', $plan->url) }}" class="form" method="POST">
       @csrf
       @method('PUT')
        
       @include('admin.pages.plan._partials.form')
    </form>
    
@stop
