<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> Laravel Primi Passi</title>
</head>

<body>
    <header>
        <h1 class="text-center text-bg-primary">INFORMATION</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('founder')}}">FOUNDER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="text-center">Laravel is an open source framework, so anyone can look, analyze and contribute
            (obviously subject to confirmation by an owner) to the code.</h2>
        <ul class="list-group">
            <li class="list-group-item list-group-item-light">TYPE: {{ $type }}</li>
            <li class="list-group-item list-group-item-light">USED FOR: {{ $use }}</li>
            <li class="list-group-item list-group-item-light">LICENSE: {{ $license }}</li>
            <li class="list-group-item list-group-item-light">COMING FROM: {{ $framework }}</li>
        </ul>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>