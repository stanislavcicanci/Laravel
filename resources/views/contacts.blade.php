<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contacts</h1>
    <nav>
        <ul style="display: flex; gap:10px; list-style-type:none;">
            <li><a href="/" style="text-decoration: none; color:black;">Home</a></li>
            <li><a href="/contacts" style="text-decoration: none; color:violet;">Contacts</a></li>
            <li><a href="/about" style="text-decoration: none; color:black;">About</a></li>
        </ul>
    </nav>
   
           <p> Numele Prenumele: {{$np}}</p>
            
           <p> Emai {{ $email}}</p>
</body>
</html>