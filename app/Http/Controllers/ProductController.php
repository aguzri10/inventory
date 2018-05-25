<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.product');
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
        $data = [
            'name' => $request['name'],
            'brands' => $request['brands'],
            'color' => $request['color'],
            'price' => $request['price'],
            'stock' => $request['stock'],
            'rack' => $request['rack'],
            'id_supplier' => $request['id_supplier'],
            'keterangan' => $request['keterangan'],
        ];

        return Product::create($data);
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
        $product = Product::findOrFail($id);
        return $product;
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
        $product = Product::findOrFail($id);
        
        $product->name = $request['name'];
        $product->brands = $request['brands'];
        $product->color = $request['color'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->rack = $request['rack'];
        $product->id_supplier = $request['id_supplier'];
        $product->keterangan = $request['keterangan'];
        
        $product->update();

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Product::destroy($id);
    }

    public function apiProduct()
    {
        $product = Product::all();
 
        return Datatables::of($product)
        ->addColumn('action', function($product){
            return '<a onclick="editForm('. $product->id .')" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                   '<a onclick="deleteData('. $product->id .')" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a> ' .
                   '<a href="checkin/'. $product->id .'" class="btn btn-sm btn-warning"><i class="fa fa-cart-plus"></i> Check In</a> ' .
                   '<a href="checkout/'. $product->id .'" class="btn btn-sm btn-success"><i class="fa fa-cart-arrow-down"></i> Check Out</a>';
        })->make(true);
    }
}
