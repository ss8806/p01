<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>サンプル</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="main">
    <form method="post" action="{{ route('update') }}">
      @csrf

      @foreach ($samples as $sample)
      <span>{{$sample->name}}</span>
        <input type="hidden" name="name" value="{{$sample->name}}" />
        <input type="hidden" name="flg" value="0" />
        @if($sample->del_flg === "1")
        <input type="checkbox" name="flg" checked="checked" value="1" />チェックされてます。
        @else
        <input type="checkbox" name="flg" value="0"/>
        @endif
      <br>
      @endforeach

      <p><input type="submit" value="送信する" /></p>
    </form>
  </div>

  <script src="main.js"></script>
</body>

</html>