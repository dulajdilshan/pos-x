<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MassDestroyTagRequest;
use App\Tag;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        try {

            $tag = Tag::create($request->all());

        } catch (QueryException $exception) {

            return view('admin.tags.create', compact('exception'));
        }

        return redirect()->route('admin.tags.index');
    }

    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());

        return redirect()->route('admin.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back();
    }

    public function massDestroy(MassDestroyTagRequest $request)
    {
         Tag::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
