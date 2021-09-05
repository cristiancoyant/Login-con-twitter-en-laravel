<?php

namespace App\Http\Controllers;

use App\Htpp\Controlles\TwitterAPIExchange;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetdeleteController extends Controller
{
    function logueado()
    {
        $usuario= Auth::user();
        return view('Tweet',compact('usuario'));
    }
  
   
}
