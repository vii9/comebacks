<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => Str::random(10),
            'email' => 'thanh130ss@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        $user2 = User::create([
            'name' => Str::random(10),
            'email' => 'ag.thanhz@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        $user3 = User::create([
            'name' => Str::random(10),
            'email' => 'dn2minh@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Post::create([
            'user_id' => $user3->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user3->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);

        Post::create([
            'user_id' => $user3->id,
            'title' => Str::random(10),
            'contents' => Str::random(180)
        ]);
    }
}
