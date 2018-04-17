@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-1">Edit category: <span class="text-primary">{{ $category->name }}</span>
                             [id = <span class="text-info">{{ $category->id }}</span>]</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>The following errors were found while validating the form!</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ Form::model($category, ['route' => ['category.update', $category], 'method' => 'post']) }}
                @method('put')

                @include('category.subview_form')

                <button type="submit" class="btn btn-warning">
                        <i class="fa fa-pencil form-control-feedback"></i> Edit
                </button>
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
            {!! Form::close() !!}
        </div>

    </div>

@endsection