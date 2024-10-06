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
    }
}
