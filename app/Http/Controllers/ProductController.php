<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->input('nombre')) {
            $query->where('nombre', 'like', '%' . $request->input('nombre') . '%');
        }

        if ($request->input('categoria')) {
            $query->where('categoria', $request->input('categoria'));
        }

        $products = $query->get();

        return view('product.index', compact('product'));
    }
}
}