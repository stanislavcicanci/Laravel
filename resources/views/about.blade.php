@extends('layout')
@section('title', 'About')
@section('sectiune1')

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
@endsection

@section('sectiune2')
@endsection
    