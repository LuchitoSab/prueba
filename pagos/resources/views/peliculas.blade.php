@include ('includes.header')

<h1>{{$titulo}}</h1>

<!-- 
MOSTRAR SI EXISTE, -->

<!-- NORMALMENTE SE VERIA CON: -->

<?= isset($director) ? $director : 'no hay director';?>

<!-- MAS FACIL SE PUEDE HACER ASI:  -->



<!-- // Uso de if  -->

@if (true)

@else tal cosa 

@endif



<!-- uso de for -->

@for ($i = 1; $i <= 10; $i++)
      El numero es: {{$i}} <br/>;
@endfor 


<?php $listado = array ('Batman', 'gran torino', 'gatu')?> 
@foreach ($listado as $pelicula)
      
      <p>{{$pelicula}}</p>

@endforeach


