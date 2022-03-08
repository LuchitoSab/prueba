    <?php
    echo "<h1> Fecha Actual </h1>";
    echo date ('d-m-y');
    echo "<br/>";
    echo "<a href='../public'>Inicio</a>";

    @extends ('layouts.master')


@section ('header')

      @parent()
    <h2> hola </h2>

@stop