@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-1">Category: <span class="text-primary">{{ $category->name }}</span></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Id</th>
                        <td>{{ $category->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created At</th>
                        <td>{{ $category->created_at }}</td>
                    </tr>    
                    <tr>
                        <th scope="row">Updated At</th>
                        <td>{{ $category->updated_at }}</td>
                    </tr>    
                </tbody>
            </table>

            <form action="{{ route('category.destroy', $category) }}" method="POST"
                  onsubmit="return confirm('Do you really want to delete this element?');">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('category.edit', $category) }}" class="btn btn-warning" title="Edit">
                    <span class="fa fa-pencil"> Edit</span>
                </a>
                <button type="submit" class="btn btn-danger" title="Remove">
                        <i class="fa fa-trash form-control-feedback"></i> Remove
                </button>
                <a href="{{ URL::previous() }}" class="btn btn-secondary" title="Back">
                    Back
                </a>
            </form>

        </div>

        <div class="col-md-6">
        </div>
    </div>
@endsection