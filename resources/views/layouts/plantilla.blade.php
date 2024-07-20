<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0">Registro Automotor</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('infraccion.index') }}">Infracciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('titular.index') }}">Titulares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('auto.index') }}">Autos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>

</body>

</html>