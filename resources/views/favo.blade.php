@foreach ($favo as $favos)
  {{ $favos->user->name}} {{ $favos->user->screen_name}}<br>
  {{ $favos->text }}<br><br>
@endforeach