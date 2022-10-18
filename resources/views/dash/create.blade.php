@extends('layouts.base');
@section('contenido')
    <div class="container">
        <h2>Agregar Producto</h2>
        <form action="/productos" method="POST">
            @csrf
    
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="number" class="form-control" tabindex="1" name="codigo" id="codigo">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <input type="text" class="form-control" tabindex="2" name="producto" id="producto">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" tabindex="3" name="precio" id="precio">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" tabindex="4" name="cantidad" id="cantidad">
        </div>
        <a href="/productos" class="btn btn-secondary" tabindex="5" >Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>

@endsection
