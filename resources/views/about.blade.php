<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="">
    <title>Document</title>
</head>
<body>
    <h1>About</h1>
        <nav>
            <ul style="display: flex; gap:10px; list-style-type:none;">
            <li><a href="/" style="text-decoration: none; color:black;">Home</a></li>
            <li><a href="/contacts" style="text-decoration: none; color:black;">Contacts</a></li>
            <li><a href="/about" style="text-decoration: none; color:violet;">About</a></li>
        </ul>
    </nav>
    
    <p>Grupe :</p>
    
    @foreach ($grupe as $grupa)
    <li>
    @if ($grupa == 'W-2041')
    {{ $grupa }}     Este grupa mea  
           @else {{ $grupa }}
       @endif
       </li> 

       {{-- {{  }} se afiseaza --}}
    @endforeach
    
    {!! $script !!}
{{-- {!!  !!}  se executa--}}



</html>