@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="offset-md-1 col-md-10">
            <h1 class="pb-1">Add a new waypoint</h1>
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

            {{ Form::open(['route' => 'waypoint.store', 'method' => 'post']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, 
                                  ['class' => 'form-control', 'maxlength' => '60', 'placeholder' => '', 'req****']) }}
                </div>
    
                <div class="form-group">
                    {{ Form::label('category_id', 'Category') }}
                    {{ Form::select('category_id', $categories, null, ['required', 'class' => 'form-control']) }}
                </div>
    
                <div class="form-group">
                    {{ Form::label('address', 'Address') }}
                    {{ Form::text('address', null, 
                                  ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '']) }}
                </div>
        
                <div class="form-group">
                    {{ Form::label('latitude', 'Latitude') }}
                    {{ Form::number('latitude', null, 
                                    ['class' => 'form-control', 'maxlength' => '10', 'placeholder' => 'From -90 to 90', 
                                     'required', 'formnovalidate', 'step' => '0.00001', 'pattern' => '[0-9]+([,\.][0-9]+)?)',
                                     'min' => '-90', 'max' => '90']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('longitude', 'Longitude') }}
                    {{ Form::number('longitude', null, 
                                    ['class' => 'form-control', 'maxlength' => '10', 'placeholder' => 'From -180 to 180', 
                                     'required', 'formnovalidate', 'step' => '0.00001', 'pattern' => '[0-9]+([,\.][0-9]+)?)',
                                     'min' => '-180', 'max' => '180']) }}
                </div>
                            
                <div class="form-group">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, 
                                      ['class' => 'form-control', 'rows' => '5']) }}
                </div>
                
                <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus form-control-feedback"></i> Create
                </button>
                <a href="{{ route('waypoint.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>

    </div>

@endsection