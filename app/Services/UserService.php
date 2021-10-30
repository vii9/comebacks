<?php

namespace App\Services;

use App\Repositories\UserPostRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SentEmailToAdminWhenCreateNewUserNotification;



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

    public function createUser()
    {
//        DB::transaction(function() {
//            $user = $this->userRepos->createUser();
//            $this->userRepos->createPost($user->id);
//        });
        DB::beginTransaction();

        try {
            $user = $this->userRepos->createUser();
            $this->userRepos->createPost($user->id);
            // all good
            $admins = $this->userRepos->getAdmins();
            Notification::send($admins, new SentEmailToAdminWhenCreateNewUserNotification($user));
            DB::commit();
            info('create user Success van');

            return redirect()->route('c.home');
        } catch (\Exception $e) {
            info('ERR:create user Fails van');
            info($e->getMessage());
            DB::rollback();

            return redirect()->route('c.err');
        }
    }
}
