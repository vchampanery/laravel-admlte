<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function first_page(Request $request){
       return view('first_page');
    //    return $request->route()->uri();
   }
   public function second_page(Request $request){
    // return $request->route()->uri();
       return view('second_page');
   }
   public function testjson(){
    response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
   }
}
