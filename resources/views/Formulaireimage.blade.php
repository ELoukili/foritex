@extends('layouts.app')

@section('content')

<div class="container">
	
	{!! Form::open(['url' => 'saveimage','files'=>'true']) !!}
	
		
	
       <div class="form-group">
       	{!! Form::label('image', "Entrez URL de l'image : ") !!}
        {!! Form::file('image',null, ['class' => 'form-control','style'=>'width:400px;']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('desc', "Entrez la description de l'image : ") !!}
        {!! Form::textarea('desc',null, ['class' => 'form-control','style'=>'width:400px;']) !!}
        </div>
        <div class="form-group">
        	{!! Form::submit('Enregestrie', ['class'=>'btn btn-primary']) !!}
        </div>
        
        
    {!! Form::close() !!}
</div>


    @if(!empty($success))
  <div class="alert alert-success"> {{ $success }}</div>
@endif
</div>
	    
     

@endsection

