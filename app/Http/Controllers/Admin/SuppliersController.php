<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MassDestroySupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Supplier;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('admin.suppliers.index', compact('suppliers'));
//        return response($suppliers[0]->name, 200);
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(Request $request)
    {
        try {
            $supplier = Supplier::create($request->all());
        } catch (QueryException $error) {
            return view('admin.suppliers.create', compact('error'));
        }
        return redirect()->route('admin.suppliers.index');
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
        try {
            $supplier->update($request->all());
        } catch (QueryException $error) {
            return view('admin.suppliers.edit', compact(['supplier', 'error']));
        }
        return redirect()->route('admin.suppliers.index');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return back();
    }

    public function massDestroy(MassDestroySupplierRequest $request)
    {
        Supplier::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
