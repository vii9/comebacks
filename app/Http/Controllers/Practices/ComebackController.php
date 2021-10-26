<?php

namespace App\Http\Controllers\Practices;

use App\Http\Controllers\Controller;
use App\Services\UserService;


use Illuminate\Http\Request;

class ComebackController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    
    public function comebacks()
    {
        // only call to services
        $postByUser = $this->userService->getAllPostsOfUser(); \Debugbar::info($postByUser->toArray());

        return view('comebacks');
    }
}
