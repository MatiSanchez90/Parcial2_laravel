@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->nombre }}</div>
                <div class="card-body">
                    <img style="max-width: 200px" src="{{ asset('/storage/' . $producto->imagen) }}" alt="" />                
                    <div class="mb-5 border-bottom">
                        {{ $producto->descripcion }}
                    </div>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary"> Volver a productos </a></form>
                </div>
            </div>
        </div>
    </div>
</div>

@vite(['resources/js/productos/show.js'])

@endsection