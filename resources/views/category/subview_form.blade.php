<!-- subview_form -->
<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, 
                    ['class' => 'form-control', 'maxlength' => '60', 'placeholder' => '', 'required']) }}
</div>
<!-- /subview_form -->               