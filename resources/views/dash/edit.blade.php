@extends('layouts.base');

@section('contenido')
    <h2>Agregar Producto</h2>
    <form action="/productos/{{$producto->id}}" method="POST">
        @method('PUT')
        @csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="number" class="form-control" tabindex="1" value="{{$producto->Cod_Prod}}"name="codigo" id="codigo">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <input type="text" class="form-control" tabindex="2" value="{{$producto->Prod}}"name="producto" id="producto">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" class="form-control" tabindex="3" value="{{$producto->Cant}}"name="precio" id="precio">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" tabindex="4" value="{{$producto->Precio}}"name="cantidad" id="cantidad">
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="5" >Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection
