@extends('layouts.app')

@section('content')
	<h3>Создать альбом</h3>
	
	{!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
  	{{Form::text('name', '', ['placeholder' => 'Название альбома'])}}
  	{{Form::textarea('description', '', ['placeholder' => 'Описание альбома'])}}
  	{{Form::file('cover_image')}}  
  	{{Form::submit('Создать',['class' => 'button'])}}
	{!! Form::close() !!}	

@endsection