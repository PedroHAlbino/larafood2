@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Planos</h1>
@stop

@section('content')
    <form action="{{ route('plan.store') }}" class="form" method="POST">
       @csrf
       @include('admin.pages.plan._partials.form')    
    </form>
    
@stop
