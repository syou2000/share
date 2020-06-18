@section('main')
<div class = "main">
  @foreach($posts as $post)
    <img src="/storage/{{$post->image}}" class="image" width=300px height=300px>
  @endforeach
  <script src="{{ asset('/js/image.js') }}"></script>
  <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
    <div class="view_box">
      <input type="file" class="file" name="file">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-success"> 投稿 </button>
    </div>
  </form>
</div>
@endsection