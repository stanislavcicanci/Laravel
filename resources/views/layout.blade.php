<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/css/ceva.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Laravel</title>
</head>
<body>
    <h1 > @yield('title')</h1>
    <nav>
        <ul style="display: flex; gap:10px; list-style-type:none;">
            <li><a href={{ route('home')  }} style="text-decoration: none; color:black;">Home</a></li>
            <li><a href={{ route('contents')  }} style="text-decoration: none; color:black;">Contacts</a></li>
            <li><a href={{ route('about') }} style="text-decoration: none; color:black;">About</a></li>
            <li><a href={{ route('info') }} style="text-decoration: none; color:black;">Info</a></li>
        </ul>
    </nav>
    
    
    <p>This is a simple Laravel application.</p>
   

    @yield('sectiune1')
   dddddddddddd
   @yield('sectiune2')
</body>
</html>