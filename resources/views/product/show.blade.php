@extends('layouts.header')
@section('title', 'PRODUCTO')
<a href="{{route('products.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$product->nombre}}
    </div>
    <div class="card-body">
        {{$product->precio}}
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@extends('layouts.footer')