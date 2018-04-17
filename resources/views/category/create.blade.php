@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-1">Create a new category</h1>
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

            {{ Form::open(['route' => 'category.store', 'method' => 'post']) }}
                @method('post')

                @include('category.subview_form')
                
                <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus form-control-feedback"></i> Create
                </button>
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
            {!! Form::close() !!}
        </div>

    </div>

@endsection