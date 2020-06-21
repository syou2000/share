<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


@extends('layouts.nav')

<div class = "main">
  <div class = "content">
    @foreach($posts as $post)
      <label class = "image_link">
        <img src="/storage/{{$post->image}}" class="image" width=293px height=293px>
        <div class="col-2">
          <button type="button" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal"></button>
        </div>
      </label>
    @endforeach
  </div>
  @include('post/form')
</div>
