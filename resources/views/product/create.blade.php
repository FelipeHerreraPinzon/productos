@extends('layouts.header')
@section('title', 'CREAR')
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


<div class="card m-5">
    <div class="card-header">
        CREAR PRODUCTO
    </div>
    <div class="card-body">
<form method="POST" action="{{route('products.store')}}">
@csrf
    

<input class="form-control" type="text" name="nombre" placeholder="INGRESA NOMBRE" required>
<br>
<input class="form-control" type="number" name="precio" placeholder="INGRESA PRECIO" required>
<br>
<input type="submit" name="enviar" value="ENVIAR">


</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@extends('layouts.footer')