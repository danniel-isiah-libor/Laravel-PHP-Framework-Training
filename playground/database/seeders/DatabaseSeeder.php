<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
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
        //     ProfileSeeder::class,
        //     PostSeeder::class,
        // ]);

        // $user = User::where(function ($query) {
        //     $query->where('id', 23)
        //         ->orWhere('id', 26);
        // })
        //     ->orWhere('id',
        //         15)->get();

        // $user = User::with("posts")->where("id", 15)->first();
        // $post = Post::with("user")
        //     ->whereHas('user', function ($query) {
        //         $query->where('email', 'anissa77@example.com');
        //     })
        //     ->first();

        // dd($user->posts[0]->title);
        // dd($post->user->email);

        // $user = User::with([
        //     'posts' => function ($query) {
        //         $query->wherelike('title', '%Omnis%')
        //         ->orWhere('body', 'like', '%sed%');
        //     },
        // ])
        //     ->take(2)
        //     ->get();

        // dd($user->toArray());

        // $posts = Post::where("posts.id", 16)
        //     ->join('users', 'users.id', '=', 'posts.user_id')
        //     ->first();
        // dd($posts->toArray());

        // $users = User::withCount('posts')
        // ->take(2)->get();

        // dd($users->toArray());

        // $post = new Post();
        // $post->user_id = 1;
        // $post->title = "This is a title";
        // $post->body = "This is a body";
        // $post->save();

        Post::insert([
            [
                "user_id" => 1,
                "title" => "This is a title",
                "body" => "This is a body",

            ],
            [
                "user_id" => 2,
                "title" => "This is a title",
                "body" => "This is a body",

            ],
        ]);

        Post::where('id', 15)->update([
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $post = Post::find(15);
        $post->update([
            'created_at' => now(),
        ]);
    }
}
