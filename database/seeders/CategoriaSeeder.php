<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre'=>'PC Gamer',
            'descripcion'=> 'pc dedicadas al gamming'
        ]);

        Categoria::create([
            'nombre'=>'Mouse',
            'descripcion'=> 'mouse para todo uso'
        ]);
        
        Categoria::create([
            'nombre'=>'Teclado',
            'descripcion'=> 'teclado para todo uso'
        ]);

        Categoria::create([
            'nombre'=>'Monitor',
            'descripcion'=> 'monitores para todo uso'
        ]);

        Categoria::create([
            'nombre'=>'Accesorios para PC',
            'descripcion'=> 'Auriculares,camaras , microfonos'
        ]);
    }
}
