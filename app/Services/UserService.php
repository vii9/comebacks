<?php

namespace App\Services;

use App\Repositories\UserPostRepository;



class UserService
{
    protected $userRepos;


    public function __construct(UserPostRepository $userPostRepository)
    {
        $this->userRepos = $userPostRepository;
    }

    public function getAllPostsOfUser()
    {
        // can validate

        // do something...

        return $this->userRepos->getAllPosts();
    }
}
