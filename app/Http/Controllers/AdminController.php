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

    public function view()
    {
        //pobranie z bazy danych
        $categories = Categories::all();
        $products = Products::all();

        //przekazanie do szablonu
        return view('admin.view', compact('products','categories'));
    }

    public function addProd()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.addProd',compact('products','categories'));
    }

    public function addCat()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.addCat',compact('products','categories'));
    }

    public function save(Request $request)
    {
        Products::create($request->all());
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.view', compact('products','categories'));
    }

    public function saveCat(Request $request)
    {
        Categories::create($request->all());
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.view', compact('products','categories'));
    }
}
