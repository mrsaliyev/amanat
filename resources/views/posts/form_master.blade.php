<div class="row">
  <div class="col-sm-2">
    {!! form::label('name','Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
      {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name of Medicine']) }}
      {{ $errors->first('name', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('price','Price') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('price') ? 'has-error' : "" }}">
      {{ Form::text('price',NULL, ['class'=>'form-control', 'id'=>'price', 'placeholder'=>'Price of Medicine']) }}
      {{ $errors->first('price', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Add' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>