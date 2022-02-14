@foreach ($favo as $favos)
  {{ $favos[0]["user"]["name"]}} {{ $favos[0]["user"]["screen_name"]}}<br>
  {{ $favos[0]["text"] }}<br><br>
@endforeach