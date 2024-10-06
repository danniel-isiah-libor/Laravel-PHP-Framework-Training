<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//    $this->call([
//        PostSeeder::class
//        ]);
//        $user = User::select(['email','name'])->where('id', 'like', '%')->first();

//        $user = User::with(['posts'])->where('id', 1)->first();
//        $post = Post::with(['user'])->whereHas('user', function ($query){
//            $query->where('users.email', 'autumn97@example.org');
//        })->first();

//        $user = User::find(1);
//        $user = User::with(['posts'=>function ($query) {
//            $query->whereLike('title', '%alias%');
//        }
//        ])
//            ->take(2)
//            ->get();
//
//        dd($user->toArray());
//    $posts = Post::where('posts.id', 1)
//        ->join('users', 'users.id', '=', 'posts.user_id')
//        ->first();
//
//    dd($posts->toArray());

//        $users = User::withCount('posts')->take(2)->get();
//        dd($users->toArray());
    }
}
