<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\UpdateSupplierRequest;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuppliersApiController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();

        return $suppliers;
    }


    public function store(Request $request)
    {
        return Supplier::create($request->all());
    }

    public function show(Supplier $supplier)
    {
        return $supplier;
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        return $supplier->update($request->all());
    }

    public function destroy(Supplier $supplier)
    {
        return $supplier->delete();
    }
}
