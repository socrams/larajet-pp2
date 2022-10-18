

@extends('layouts.base')
@section('contenido')
<br>

{{-- <a href="/" class="btn btn-primary">Salir </a> --}}
<div class="container">
    <a class="btn btn-secondary" href="productos/create" >Agregar producto</a>
</div>    
<table id="productos" class="table table-striped" style="width: 100%">
    <thead>
        <tr class="align-content-center">
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Codigo Producto</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody >
        @foreach ($productos as $data)
            <tr >
                {{-- <td>{{$data->id}}</td> --}}
                <td >{{$data->Cod_Prod}}</td>
                <td>{{$data->Prod}}</td>
                <td>{{$data->Precio}}</td>
                <td>{{$data->Cant}}</td>
                <td>
                    <form action="{{route ('productos.destroy' , $data->id)}}" method="POST">
                        <a href="/productos/{{$data->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    @section('js')
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
            $('#productos').DataTable();
        });
        </script>
        
    @endsection
@endsection
