@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de productos') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Nombre </th>
                                <th> Precio </th>
                                <th> Categoría </th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $prod)
                                <tr>
                                    <td> {{ $prod->nombre }} </td>
                                    <td> {{ $prod->precio_format() }} </td>
                                    <td> {{ $prod->categoria->nombre }} </td>
                                    <td>  
                                        <a href="{{ route('productos-cliente.show', $prod) }}" class="btn btn-primary"> Ingresar </a>
                                    </td>
                                    <td> {{ $prod->descripcion }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $productos->links() }}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection