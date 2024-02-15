<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <h1 > @yield('title')</h1>
    <nav>
        <ul style="display: flex; gap:10px; list-style-type:none;">
            <li><a href={{ route('home')  }} style="text-decoration: none; color:black;">Home</a></li>
            <li><a href={{ route('contents')  }} style="text-decoration: none; color:black;">Contacts</a></li>
            <li><a href={{ route('about') }} style="text-decoration: none; color:black;">About</a></li>
        </ul>
    </nav>
    
    
    <p>This is a simple Laravel application.</p>
   

    @yield('sectiune1')
   dddddddddddd
   @yield('sectiune2')
</body>
</html>