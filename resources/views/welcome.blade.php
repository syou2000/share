<head>
  <title>Share</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Khand:wght@500&family=Lobster&family=Pacifico&family=Parisienne&family=Work+Sans:wght@100;200&display=swap" rel="stylesheet">
  @if(app('env') == 'production')
      <link href="{{ secure_asset('css/welcome.css') }}" rel="stylesheet">
  @else
      <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
  @endif
</head>
<body>
  <div class="container ops-main">
    <div class="row">
      <div class="header">
        <h1 class="ops-title title__fontsize">Share</h1>
        <div class="loginspace">
          <a href="/login" class="login__fontsize login__fontsize1">ログイン</a>
          <a href="/register" class="login__fontsize">新規登録</a>
        </div>
      </div>
      <div class="main col-sm-6">
        <h3 class="message">あなたの<span>瞬間</span>をシェアしませんか?</h3>
      </div>
    </div>
  </div>
</body>
