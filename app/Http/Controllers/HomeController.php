<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\renderUsing;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('welcome');
    }
}
