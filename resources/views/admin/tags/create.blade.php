@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Add Tags
        </div>

        <div class="card-body">
            <form action="{{ route('admin.tags.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control"
                           value="{{ old('name', isset($tag) ? $tag->name : '') }}">
                    @if($errors->has('title'))
                        <em class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.permission.fields.title_helper') }}
                    </p>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
