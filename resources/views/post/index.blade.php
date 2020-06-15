<!DOCTYPE html>
<html>
  <head>
    <title>Share</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <a href="/post/create">画像投稿</a>
    @foreach($posts as $post)
      {{$post->id}}
    @endforeach
  </body>
</html>