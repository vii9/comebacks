<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{

    protected $_userService;

    public function __construct(UserService $userService)
    {
        $this->_userService = $userService;
    }

    public function createUser()
    {
        return $this->_userService->createUser();
    }


    public function welcomeMail()
    {
        return view('emails.show');
    }

    public function errTransaction()
    {
        return view('emails.err');
    }
}
