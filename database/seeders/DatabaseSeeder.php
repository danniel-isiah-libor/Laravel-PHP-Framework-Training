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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     PostSeeder::class
        // ]);


        /**
         * where('id', 1)
         * where('id', '=', 1)
         *
         * whereNot('id', 1)
         * where('id', '!=', 1)
         */
        // $user = User::select([
        //     'email',
        //     'name'
        // ])
        //     ->where('id','like','%')
        //     ->first();
            // ->toSql();




            // $user = User::with(['posts'])->where('id', 1)->first();

            // $post = Post::with(['user'])
            // ->whereHas('user', function($query){
            //     $query->where('email', 'mohamed21@example.org');
            // })->first();

            // $user = User::take(5)
            // ->orderBy('id','asc')
            // ->get();
            // $user = User::find(1);


            // $user = User::with(
            //     ['posts' => function($query){
            //         $query->whereLike('body', 'title', 'nihil');
            //     }
            // ])
            // ->take(2)
            // ->get();
            // dd($user ->toArray());

            // $post = Post::where('id', 1)
            //     ->join('users', 'users.id', '=', 'posts.user_id')
            //     ->toSql();
            // $post = Post::where('posts.id', 1)
            //     ->join('users', 'users.id', '=', 'posts.user_id')
            //     ->first();
            
            //     dd($post->toArray());


            // $user = User::withCount('posts')->take(2)->get();


            // $posts = Post::where('posts.id',1)
            // ->join('users', function ($query){
            //     $query->on('users.id', '=','posts.user_id')
            //     ->where();
            // })
            // ->first();
            // dd($user->toArray());
    
            // Option 1
            // $post = new  Post();

            // $post->user_id=1;


            // Post::create([
            //     'user_id' =>1,
            //     'title' => 'This is nigel',
            //     'body' => 'this is jeah',
            // ]);
        }
}
