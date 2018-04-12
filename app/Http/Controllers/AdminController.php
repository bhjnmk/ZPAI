<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        //pobranie z bazy danych
        $categories = Categories::all();
        $products = Products::all();

        //przekazanie do szablonu
        return view('admin.admin', compact('products','categories'));
    }

    public function saveCat(Request $request)
    {
        Categories::create($request->all());
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.save', compact('products','categories'));
    }

    public function saveProd(Request $request)
    {
        Products::create($request->all());
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.save', compact('products','categories'));
    }


}
