@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="offset-md-1 col-md-10">
            <h1 class="pb-1">Edit waypoint: {{ $waypoint->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-md-1 col-md-10">

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

            {{ Form::model($waypoint, ['route' => ['waypoint.update', $waypoint], 'method' => 'post']) }}
                @method('put')

                @include('waypoint.subview_form')

                <button type="submit" class="btn btn-primary">
                        <i class="fa fa-pencil form-control-feedback"></i> Edit
                </button>
                <a href="{{ route('waypoint.index') }}" class="btn btn-secondary">Cancel</a>
            {!! Form::close() !!}
        </div>

    </div>

@endsection