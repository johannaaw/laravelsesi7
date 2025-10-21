<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::all()->each(function(User $user){
            if($user->posts()->count() === 0){
                $posts = Post::factory()->count(rand(1,5))->make()->toArray();

                $user->posts()->createMany($posts);
            }
        });
    }
}
