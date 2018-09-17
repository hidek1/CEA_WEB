<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>403 Forbidden</title>
  <style>
    .error-wrap {
      padding: 5px 20px;
      border: 1px solid #dcdcdc;
      display: inline-block;
      box-shadow: 0px 0px 8px #dcdcdc;
    }
    h1 { font-size: 18px; }
    p { margin-left: 10px; }
  </style>
</head>
<body>
  <div class="error-wrap">
    <section>
      <h1>403 Forbidden</h1>
      <p>You do not have access. <br>
        If u didn't login: Please <a href="{{ asset('/main') }}">login</a><br><br>
        <a href="{{ asset('/main/logout') }}">logout</a>
        </p>
    </section>
  </div>
</body>
</html>