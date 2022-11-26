<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function getProducts()
    {
        $products = [
            {
                "id": 1,
                "name": "Iphone 4",
                "description": "Description of Iphone 4",
                "slug": "iphone-4"
                "price": 149.99
            },
            {
                "id": 2,
                "name": "Iphone 5",
                "description": "Description of Iphone 5",
                "slug": "iphone-5"
                "price": 249.99
            },
            {
                "id": 3,
                "name": "Iphone 6",
                "description": "Description of Iphone 6",
                "slug": "iphone-6"
                "price": 349.99
            },
            {
                "id": 4,
                "name": "Iphone 7",
                "description": "Description of Iphone 7",
                "slug": "iphone-7"
                "price": 499.99
            },
        ];
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
