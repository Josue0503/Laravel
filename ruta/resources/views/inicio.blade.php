<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Welcome to home</h1>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">

            <a href="{{route('servicios')}}" class="navbar-brand">Servicios</a>
            <a href="{{route('mapa')}}" class="navbar-brand">Mapa</a>
            <a href="{{route('productos')}}" class="navbar-brand">Productos</a>
        </div>

    </nav>


</body>

</html>