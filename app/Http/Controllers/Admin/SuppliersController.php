<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateSupplierRequest;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('admin.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Supplier $supplier)
    {
        return view('admin.suppliers.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        return view('admin.suppliers.edit', compact('supplier'));
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());

        return redirect()->route('admin.suppliers.index');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Supplier::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
