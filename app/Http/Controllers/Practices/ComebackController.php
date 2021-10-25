<?php

namespace App\Http\Controllers\Practices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComebackController extends Controller
{
    public function comebacks()
    {
        return view('comebacks');
    }
}
