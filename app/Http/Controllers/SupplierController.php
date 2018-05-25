<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.supplier');
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
            'address' => $request['address'],
            'phone' => $request['phone'],
        ];

        return Supplier::create($data);
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
    public function edit($id_supplier)
    {
        $supplier = Supplier::findOrFail($id_supplier);
        return $supplier;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_supplier)
    {
        $supplier = Supplier::findOrFail($id_supplier);
        
        $supplier->name = $request['name'];
        $supplier->address = $request['address'];
        $supplier->phone = $request['phone'];
        
        $supplier->update();

        return $supplier;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_supplier)
    {
        return Supplier::destroy($id_supplier);
    }

    public function apiSupplier()
    {
        $supplier = Supplier::all();
 
        return Datatables::of($supplier)
        ->addColumn('action', function($supplier){
            return '<a onclick="editForm('. $supplier->id_supplier .')" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                   '<a onclick="deleteData('. $supplier->id_supplier .')" class="btn btn-danger btn-flat"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        })->make(true);
    }
}
