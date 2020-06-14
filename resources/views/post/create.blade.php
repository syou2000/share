<!DOCTYPE html>
<html>
  <head>
    <title>Share</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <script src="{{ asset('/js/image.js') }}"></script>
    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
      <div class="view_box">
        <input type="file" class="file" name="file">
        {{ csrf_field() }}
        <button class="btn btn-success"> Upload </button>
      </div>
    </form>
  </body>
</html>