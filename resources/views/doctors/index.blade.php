


@foreach ($doctors as $doctor )

<hr>
Dr {{$doctor->first_name}} {{$doctor->surname}}
<br>

@endforeach
