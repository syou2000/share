@if(app('env') == 'production')
    <link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endif
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@extends('layouts.nav')

<div class = "main">
  <div class = "content">
    @foreach($posts as $post)
      <img src="/storage/{{$post->image}}" class="image" width=293px height=293px>
    @endforeach
  </div>
  <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
    <div class="view_box">
      <label>
        <div class="col-2">
          <button type="button" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal"></button>
        </div>
        <i class = "fas fa-camera"></i>
      </label>
      {{ csrf_field() }}
      <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <script src="{{ asset('/js/image.js') }}"></script>
        <div class="modal-dialog">
            <div id = "modal-content" class="modal-content">
                <div id = "modal-body" class="modal-body">
                  <label>
                    <img class = "postimage" src = "images/photo.png" width=302px height=308px>
                    <input type="file" class="file" name="file">
                  </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                    <button type="submit" class="btn btn-danger">投稿</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </form>
</div>