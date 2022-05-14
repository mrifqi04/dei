<div class="form-group {{ $errors->has('jam') ? 'has-error col-7' : 'col-7' }}">
    {{ Form::label('jam', 'Title') }}    
    {{ Form::text('title',$sejarah->title,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('jam') ? $errors->first('jam') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error col-7' : 'col-7' }}">
    {{ Form::label('content', 'Content') }}    
    {{ Form::textarea('content',$sejarah->content,['class'=>'form-control border-input']) }}
    <span class="text-danger">{{ $errors->has('content') ? $errors->first('content') : '' }}</span>
</div>