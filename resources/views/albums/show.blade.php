@extends('layouts.app')

@section('content')
	<h1>{{$album->name}}</h1>
	<a href="/" class="button secondary">Вернуться на главную</a>
    @auth
	<a href="/photos/create/{{$album->id}}" class="button">Загрузить альбом</a>
    @endauth
  <img src="/storage/album_covers/{{$album->cover_image}}" width="90px" alt="asd" style="float:right">
	<hr>

  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
             <div class='medium-4 columns end'>
               <a href="/photos/{{$photo->id}}">
                  <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
               <h4>{{$photo->title}}</h4>
          @else
            <div class='medium-4 columns'>
              <a href="/photos/{{$photo->id}}">
                  <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
              <br>
              <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>В альбоме нет изображений</p>
  @endif

@endsection