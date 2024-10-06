<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //     // ProfileSeeder::class,
        //     PostSeeder::class
        // ]);

        /**
         * where('id', 1)
         * where('id', '=', 1)
         *
         * whereNot('id', 1)
         * where('id', '!=', 1)
         *
         * ->take(5)
         *  ->orderBy('id', 'asc')
         *
         * where(function ($query) {
         * $query->where('id', 1)
         * ->orWhere('id', 26);
         * })
         * ->orWhere('id', 3)
         * ->get();
         */
        // $sql = "select * from users where id = 1 limit 1";
        // $user = DB::select($sql);

        // $post = Post::with(['user'])
        //     ->whereHas('user', function ($query) {
        //         $query->where('email', 'oreilly.kari@example.net');
        //     })
        //     ->first();

        // dd($post->toArray());

        // $user = User::with([
        //     'posts' => function ($query) {
        //         $query->whereLike('title', '%soluta%')
        //             ->orWhere('body', 'like', '%Autem%');
        //     }
        // ])
        //     ->take(2)
        //     ->get();

        // dd($user->toArray());

        // $posts = Post::where('posts.id', 1)
        //     ->join('users', function ($query) {
        //         $query->on('users.id', '=', 'posts.user_id')
        //             ->where();
        //     })
        //     ->first();

        // dd($posts->toArray());

        // $users = User::withCount([
        //     'posts' => function ($query) {
        //         $query->where('status', 'published');
        //     }
        // ])->take(2)->toSql();

        // dd($users);

        // $post = new Post();
        // $post->user_id = 1;
        // $post->title = 'This is a title';
        // $post->body = 'This is a body';
        // $post->save();

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'This is a title',
        //     'body' => 'This is a body'
        // ]);

        // Post::insert([
        //     [
        //         'user_id' => 1,
        //         'title' => 'This is a title',
        //         'body' => 'This is a body',
        //     ],
        //     [
        //         'user_id' => 2,
        //         'title' => 'This is a title',
        //         'body' => 'This is a body',
        //     ]
        // ]);

        // $post = Post::find(15);
        // $post->created_at = now();
        // $post->updated_at = now();
        // $post->save();

        // Post::where('id', 15)->update([
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // $post = Post::find(15);
        // $post->update(['created_at' => now()]);

        Post::find(15)->delete();
    }
}
