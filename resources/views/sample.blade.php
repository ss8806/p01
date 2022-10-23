<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>サンプル</title>
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="main">
    <form method="post" action="{{ route('update') }}">
      @csrf

      @foreach ($samples as $sample)
      <span>{{$sample->name}}</span>
      <input type="hidden" name="id" value="{{$sample->id}}" />
      <input type="hidden" name="name" value="{{$sample->name}}" /> 
      @if($sample->del_flg === "1")
      <input type="hidden" name="flg" value="0" />
      <!-- チェックされてなければ値はリクエストされない -->
      <input type="checkbox" name="flg" checked="checked" value="1" />チェックされてます
      @else
      <input type="hidden" name="flg" value="0" />
      <input type="checkbox" name="flg" value="1" />
      @endif
      <br>
      @endforeach

      <p><input type="submit" value="送信する" /></p>
    </form>
  </div>
</body>
<script src="{{ asset('js/hello.js') }}"></script>

</html>