@extends('layouts.app')

@section('content')
	<h3>Загрузить изображение</h3>
	
	{!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
  	{{Form::text('title', '', ['placeholder' => 'Название фото'])}}
  	{{Form::textarea('description', '', ['placeholder' => 'Описание фото'])}}
  	{{Form::hidden('album_id', $album_id)}}  
  	{{Form::file('photo')}}  
  	{{Form::submit('Принять',['class' => 'button'])}}
	{!! Form::close() !!}	

@endsection