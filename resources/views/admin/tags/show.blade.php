@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Show Tag
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        {{ $tag->name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
