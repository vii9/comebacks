<?php

namespace App\Repositories;


use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserPostRepository
{
    protected $_userModel;
    protected $_postModel;


    public function __construct(User $user, Post $post)
    {
        $this->_userModel = $user;
        $this->_postModel = $post;
    }

    public function getAllPosts()
    {/*** connect with model ***/

        return $this->_userModel->with('posts')->get();
    }

    public function createUser()
    {
        return $this->_userModel->create([
            'name' => 'newUser',
            'email' => 'znewuser@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }

    public function createPost($user_id)
    {
        return $this->_postModel->create([
            'user_id' => $user_id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);
    }

    public function getAdmins()
    {
        return $this->_userModel->select('email', 'id')->whereIsAdmin(1)->get();
    }
}
