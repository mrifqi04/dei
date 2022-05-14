@extends('layouts.backend')

@section('content')

    <div class="container">        
        <h1 class="mt-5 mb-5">Update Jenis</h1>          
                                                   
        {!! Form::open(['url' => ['admin/store-jenis', $bean->id], 'files'=>'true', 'method'=>'put']) !!}

                <div class="row-col-12">
                    @include('admin.jenis._fields')    
                </div>
                
                <div class="form-group">
                    {{ Form::submit('Ubah bean', ['class'=>'btn btn-primary', 'style' => 'margin-bottom: 5%; margin-top: 5%;']) }}
                </div>                
        {!! Form::close() !!}               
    </div>          


@endsection