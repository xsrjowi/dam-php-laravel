<!DOCTYPE html>
<html lang="en">
<head>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <!-- <nav>
        <ul>
            <li><a href="{{ route('tickets.index') }}">Tickets</a></li>

        </ul>
    </nav> -->

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
