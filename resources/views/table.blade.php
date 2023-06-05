<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jugadores</title>
</head>
<body>
<div class="container">
    <div class="table">
        <div class="table-header">
            <div class="header__item"><a id="nombre" class="filter__link" href="#">Nombre</a></div>
            <div class="header__item"><a id="equipo" class="filter__link" href="#">Equipo</a></div>
            <div class="header__item"><a id="posicion" class="filter__link" href="#">Posicion</a></div>
            <div class="header__item"><a id="edad" class="filter__link filter__link--number" href="#">Edad</a></div>
        </div>
        <div class="table-content">
            @foreach ($jugadores as $jugador)
                <div class="table-row">
                    <div class="table-data">{{$jugador->nombre}}</div>
                    <div class="table-data">{{$jugador->equipo}}</div>
                    <div class="table-data">{{$jugador->posicion}}</div>
                    <div class="table-data">{{$jugador->edad}}</div>
                </div>
            @endforeach
        </div>
        <a href="/jugadorform" class="btn btn-success">Ir al formulario</a>
    </div>
</div>
<script src="{{asset('js/tablescript.js')}}"></script>
</body>
</html>
