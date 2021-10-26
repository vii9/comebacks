<?php

namespace App\Repositories;


use App\Models\User;

class UserPostRepository
{
    protected $userModel;


    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function getAllPosts()
    {/*** connect with model ***/

        return $this->userModel->with('posts')->get();
    }
}
