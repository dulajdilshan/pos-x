<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use App\Supplier;
use App\Tag;

class ProductsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $products = Product::all();
        $tags = Tag::all()->pluck('name', 'id');

        return view('admin.products.index', compact('products', 'tags'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_create'), 403);

        $suppliers = Supplier::all();
        $tags = Tag::all()->pluck('name', 'id');

        return view('admin.products.create', compact('suppliers', 'tags'));
    }

    public function createWithError($errors)
    {
        abort_unless(\Gate::allows('product_create'), 403);

        $suppliers = Supplier::all();
        $tags = Tag::all()->pluck('name', 'id');

        return view('admin.products.create', compact('suppliers', 'tags', 'errors'));
    }

    public function store(StoreProductRequest $request)
    {
        abort_unless(\Gate::allows('product_create'), 403);

        $errors = [];

        $product = new Product();
        $product['item_code'] = $request['item_code'];
        $product['name'] = $request['name'];
        $product['quantity'] = $request['quantity'];
        $product['unit_price'] = $request['unit_price'];

        try {
            $product->save();
            $product->tags()->sync($request->input('tags', []));
        } catch (\Exception $exception) {
            $errors[count($errors)] = $exception->errorInfo[2];
            return $this->createWithError($errors);
        }

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        $suppliers = Supplier::all();
        $tags = Tag::all()->pluck('name', 'id');

        return view('admin.products.edit', compact('product','suppliers', 'tags'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        $product->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_unless(\Gate::allows('product_show'), 403);
        $tags = Tag::all()->pluck('name', 'id');

        return view('admin.products.show', compact('product', 'tags'));
    }

    public function destroy(Product $product)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
