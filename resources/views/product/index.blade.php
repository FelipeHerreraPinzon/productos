@extends('layouts.header')

@section('title', 'PRODUCTOS')

    <ul class="nav justify-content-center  ">
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="{{route('welcome')}}" aria-current="page"><h3 class="text-white">LARAVEL</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-success" href="{{route('products.create')}}" aria-current="page"><h3 class="text-white">CREAR PRODUCTO</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-info" href="{{route('products.index')}}" aria-current="page"><h3 class="text-white">LISTA PRODUCTOS</h3></a>
            </li>
    </ul>

@section('content')

<a href="{{route('products.create')}}" class="btn btn-success mt-3">CREAR PRODUCTO</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PRODUCTO</th>
                <th scope="col">PRECIO</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->nombre}}</td>
                <td>{{$product->precio}}</td>
            <td><a href="{{route('products.show', $product)}}" class="btn btn-info">Ver</a></td> 
            <td><a href="{{route('products.edit', $product)}}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{route('products.destroy', $product)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="eliminar" class="btn btn-danger">
                </form>
            </td>    
               
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>


@endsection


@extends('layouts.footer')