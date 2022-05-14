@extends('layouts.backend')

@section('content')

    <div class="container">        
        <h1 class="mt-5 mb-5">Update Sejarah</h1>                                                        
        {!! Form::open(['url' => ['admin/store-sejarah', $sejarah->id], 'files'=>'true', 'method'=>'put']) !!}

                <div class="row-col-12">
                    @include('admin.sejarah._fields')    
                </div>
                
                <div class="form-group">
                    {{ Form::submit('Ubah Sejarah', ['class'=>'btn btn-primary', 'style' => 'margin-bottom: 5%; margin-top: 5%;']) }}
                </div>                
        {!! Form::close() !!}               
    </div>          


@endsection