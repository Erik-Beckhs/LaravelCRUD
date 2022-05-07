@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')
<div class="m-2">
    <div>
        <a href="articulos/create" class="btn btn-info text-white mb-4">Crear</a>
    </div>
    <table class="table table-striped mt-2" id="articulos">
        <thead class="bg-primary text-white">
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <form action="/articulos/{{$articulo->id}}" method="POST">
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info text-white">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#articulos').DataTable(
            {
                "lengthMenu" : [[5, 10, 50, -1], [5, 10, 50, "All"]]
            }
        );
    } );
</script>
@stop