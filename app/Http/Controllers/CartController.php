<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); 

        // Lógica para agregar productos al carrito
        // Puedes almacenar la información del carrito en la sesión

        return response()->json(['message' => 'Product added to cart']);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Lógica para eliminar productos del carrito
        // Puedes actualizar la información del carrito en la sesión

        return response()->json(['message' => 'Product removed from cart']);
    }

    public function showCart()
    {
        // Obtener el contenido del carrito desde la sesión
        $cart = Session::get('cart', []);

        // Pasar la variable $cart a la vista
        return view('cart', ['cart' => $cart]);
    }

    public function getCartContent()
{
    // Obtener el contenido del carrito desde la sesión
    $cart = Session::get('cart', []);

    return view('cart', ['cart' => $cart]);
}
}


