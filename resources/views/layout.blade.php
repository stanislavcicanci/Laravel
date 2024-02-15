<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
   
    <nav>
        <ul style="display: flex; gap:10px; list-style-type:none;">
            <li><a href="/" style="text-decoration: none; color:violet;">Home</a></li>
            <li><a href="/contacts" style="text-decoration: none; color:black;">Contacts</a></li>
            <li><a href="/about" style="text-decoration: none; color:black;">About</a></li>
        </ul>
    </nav>
    
    <h1 >Welcome to Laravel</h1>
    <p>This is a simple Laravel application.</p>
   

    @yield('sectiune1')
   dddddddddddd
   @yield('sectiune2')
</body>
</html>