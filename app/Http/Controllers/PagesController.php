<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){


   }


   public function about(){

    //return the about view
    return view('Pages.about')->with('title','About Us');

   }

   public function services(){

    //return services view
    return view('Pages.services')->with('title','Services');

   }





}
