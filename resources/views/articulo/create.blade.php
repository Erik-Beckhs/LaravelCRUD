@extends('adminlte::page')

@section('title', 'Nuevo Articulo')

@section('content_header')
    <h1>Nuevo Articulo</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
  @csrf <!-- directiva que genera token "de autenticidad" -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Codigo</label>
    <input type="text" name="codigo" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio</label>
    <input type="number" name="precio" class="form-control" id="exampleInputEmail1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="/articulos" type="button" class="btn btn-secondary">Cancelar</a>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop