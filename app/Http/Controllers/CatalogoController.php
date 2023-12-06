<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CatalogoController extends Controller
{
    public function catalogo()
    {
        // Utilizar paginación para obtener productos
        $productos = Producto::paginate(4); // El número 4 es la cantidad de productos por página

        return view('catalogo', ['productos' => $productos]);
    }
}





