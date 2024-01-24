<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $name = $request->name;
        $price = $request->price;

        $db = Firebase::database();
        $db->getReference;
    }

}
