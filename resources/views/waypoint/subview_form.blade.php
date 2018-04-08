<!-- subview_form -->
<div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, 
                      ['class' => 'form-control', 'maxlength' => '60', 'placeholder' => '', 'required']) }}
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
<!-- /subview_form -->               