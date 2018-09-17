<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   public function contact(){

        return view('Pages.contact')->with('title','Contact Us');

   }


   public function about(){

    //return the about view
    return view('Pages.about')->with('title','About Us');

   }

   public function services(){

    //return services view
    return view('Pages.services')->with('title','Services');

   }


   public function terms(){

    //return terms and conditions view
    return view('Pages.terms')->with('title','Terms and Conditions');

   }



}
