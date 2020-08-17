<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Tag;

class TagsApiController extends Controller
{
    public function index()
    {
        $tags = tag::all();

        return $tags;
    }

    public function store(StoreTagRequest $request)
    {
        return Tag::create($request->all());
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        return $tag->update($request->all());
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function destroy(Tag $tag)
    {
        return $tag->delete();
    }
}
