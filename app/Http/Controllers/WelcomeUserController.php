<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nick=null)
    {
    	$name=ucfirst($name);

		if ($nick) {
		return "Bienvenido {$name}, tu apodo es {$nick}";

		}else{
			return "Bienvenido {$name}";
		}
    }
}
