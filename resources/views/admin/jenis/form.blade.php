<div class="form-group{{ $errors->has('jam') ? 'has-error' : ''}}">
    {!! Form::label('jam', 'Gambar Bean', ['class' => 'control-label']) !!}
    {!! Form::file('gambar_bean', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jam', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('jam') ? 'has-error' : ''}}">
    {!! Form::label('jam', 'Nama Bean', ['class' => 'control-label']) !!}
    {!! Form::text('nama_bean', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jam', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('jam') ? 'has-error' : ''}}">
    {!! Form::label('jam', 'Deskripsi Bean', ['class' => 'control-label']) !!}
    {!! Form::text('content_beans', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jam', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-success btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
