@extends('adminlte::page')

@section('title', 'Editar Articulo')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
  @csrf <!-- directiva que genera token "de autenticidad" -->
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código</label>
    <input type="text" name="codigo" class="form-control" id="codigo" value="{{$articulo->codigo}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$articulo->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad" value="{{$articulo->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio</label>
    <input type="number" name="precio" class="form-control" id="precio" value="{{$articulo->precio}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="/articulos" type="button" class="btn btn-secondary">Cancelar</a>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop