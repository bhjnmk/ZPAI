<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('sites.index', compact('categories'));
    }

    public function about()
    {
        $categories = Categories::all();

        //pobranie z bazy danych
        $products = Products::all();

        //przekazanie do szablonu
        return view('sites.about', compact('products','categories'));
    }

}
