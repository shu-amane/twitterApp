<head>
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<link rel="stylesheet" href="{{ asset('css/favo.css')}}">
</head>
  <div class="container">
    @foreach ($favo as $favos)
      <div class="col align-self-center frame pb-1">
        {{ $favos["user"]["name"]}} {{ "@".$favos["user"]["screen_name"]}}<br>
        {{ $favos["text"] }}
      </div>
    @endforeach
  </div>
