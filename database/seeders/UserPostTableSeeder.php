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
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            //'remember_token' => Str::random(10),
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
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            //'remember_token' => Str::random(10),
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
    }
}
