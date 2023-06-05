<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Form</title>
</head>
<body>
<div class="login-box">
    <h2>Registrar Jugador</h2>
    <form method="POST" action="{{route('jugadorform.store')}}">
        @csrf
        <div class="user-box">
            <input type="text" name="nombre" required="">
            <label>Nombre</label>
        </div>
        <div class="user-box">
            <input type="text" name="equipo" required="">
            <label>Equipo</label>
        </div>
        <div class="user-box">
            <input type="text" name="posicion" required="">
            <label>Posicion</label>
        </div>
        <div class="user-box">
            <input type="text" name="edad" required="">
            <label>Edad</label>
        </div>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Registrar
        </button>
    </form>
</div>
</body>
</html>
