<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Categories::all();
        return view('sites.index', compact('categories'));
    }

    public function view()
    {
        //pobranie z bazy danych
        $categories = Categories::all();
        $products = Products::all();

        //przekazanie do szablonu
        return view('sites.table', compact('products','categories'));
    }

    public function about()
    {
        $categories = Categories::all();

        //pobranie z bazy danych
        $products = Products::all();

        //przekazanie do szablonu
        return view('sites.about', compact('products','categories'));
    }

    public function add()
    {
        $categories = Categories::all();
        return view('sites.add',compact('products','categories'));
    }

    public function save(Request $request)
    {
        Products::create($request->all());

        //dd($request->all());

        //drugi sposob
       /* $site  = new Site();
        $site->category  = $request->input('category');
        $site->title  = $request->input('title');
        $site->description  = $request->input('description');
        $site->img  = $request->input('img');
        $site->save();*/

    }
}
