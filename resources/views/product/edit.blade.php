@extends('layouts.header')
@section('title', 'EDITAR')
<form method="POST" action="{{route('products.update', $product)}}">
@csrf
@method('put')    

<input class="form-control" type="text" name="nombre" value="{{$product->nombre}}">
<br>
<input class="form-control" type="number" name="precio" value="{{$product->precio}}">
<br>
<input type="submit" name="enviar" value="ACTUALIZAR" class="btn btn-success">

</form>

@extends('layouts.footer')