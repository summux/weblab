@extends('layouts.app')
@section('title','productos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">productos</div>

                <div class="panel-body">
                    <div class="prloop">
                    @foreach ($productos as $producto)
                    <p>Producto: {{ $producto->nombre }} {{ $producto->precio }}
                        <img src="{{ $producto->rutaimg }}"width="75"> {{ $producto->stock }}</p>
                    @endforeach
                    {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
