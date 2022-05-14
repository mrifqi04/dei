<div class="form-group {{ $errors->has('jam') ? 'has-error col-7' : 'col-7' }}">
    <img src="{{ URL::asset('images') }}/{{ $bean->gambar_bean }}" alt="">    
</div>

<div class="form-group {{ $errors->has('jam') ? 'has-error col-7' : 'col-7' }}">
    {{ Form::label('jam', 'Title') }}    
    <input type="file" name="gambar_bean">
    <span class="text-danger">{{ $errors->has('jam') ? $errors->first('jam') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('jam') ? 'has-error col-7' : 'col-7' }}">
    {{ Form::label('jam', 'Title') }}    
    {{ Form::text('nama_bean',$bean->nama_bean,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('jam') ? $errors->first('jam') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error col-7' : 'col-7' }}">
    {{ Form::label('content', 'Content') }}    
    {{ Form::textarea('content_beans',$bean->content_beans,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('content') ? $errors->first('content') : '' }}</span>
</div>