<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Support\Facades\Input;

class SitesController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $categories = Categories::all();
        return view('sites.index', compact('products','categories'));
    }

    public function category()
    {
        $products = Products::all();
        $categories = Categories::all();
        $id = Input::get('id');
        return view('sites.category', compact('products','categories','id'));
    }


}
