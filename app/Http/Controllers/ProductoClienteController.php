<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;

class ProductoClienteController extends Controller
{
    
    public function index()
    {
        $productos = Producto::where('is_visible', true)
        ->orderBy('id', 'desc')
        ->paginate(7);
    return view('productos.index', [
        'productos' => $productos
    ]);
    }

    public function show(Producto $producto)
    {
        return view('productos-cliente.show', [
            'productos' => $producto
        ]);
    }

}
