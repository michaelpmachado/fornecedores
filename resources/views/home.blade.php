@extends('adminlte::page')

@section('title', 'Cadastro de Fornecedores')

@section('content_header')
<h1>Cadastro de Fornecedores</h1>
@stop

@section('content')
<p>Seja bem vindo ao painel do Cadastro de Fornecedores</p>

<div class="card">
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Fornecedores Cadastrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Leia mais... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Fornecedores Ativos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Leia mais... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>3201</h3>
                    <p>Fornecedores entrega mesmo dia</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Leia mais... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Fornecedores lista negra</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Leia mais... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

</div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Olá!');
</script>
@stop