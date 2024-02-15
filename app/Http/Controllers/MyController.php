<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   public function About() {
        $grupe = ['P-2041', 'W-2041', 'R-2041', 'W-2042', 'W-2043'];
         
        return view('about', ['grupe' => $grupe, 'script' => "<script> alert('Fii atent la  ore')</script>"]);
    }

   public function Home() {
        return view('welcome');
    }


    public function Contacts() {
        $np = "Cicanci Stanislav";
        $email = "stanislavacicanci@gmail.com";
        return view('contacts', ['np' => $np, 'email' => $email]);
    }
}


