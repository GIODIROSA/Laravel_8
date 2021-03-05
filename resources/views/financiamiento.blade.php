<!DOCTYPE html>

<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financimiento</title>
</head>
<body>

    <h1>Hola desde financiamiento - {{ "hola mundo $nombre $apellido"  }}</h1>

    {{-- <h1>Hola desde financiamiento - {!! "hola mundo $nombre $apellido  <script>alert('hola a todos')</script>" !!}</h1> --}}
<ul>
    @foreach ($posts as $post)

    <li>{{$post}}</li>
        
    @endforeach

</ul>


@isset($nombres)
   isset
@endisset

@empty($nombres)
  empty
@endempty
   
<ul>
@forelse ($nombres as $nombre)




    <li>

        
@if ($loop-> first)
Primero:
    


@elseif ($loop-> last)
Último:

@else
Medio:
    
@endif
        
        {{ $nombre }}</li>
@empty
    <p>No hay nombres</p>
@endforelse

</ul>

    
</body>



</html>