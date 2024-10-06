<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getUser($id = null)
    {
        // query here
        $users = [
            [
                'id' => 1,
                'name' => 'William',
                'age' => 39,
                'email' => 'william@mail.test'
            ],
            [
                'id' => 2,
                'name' => 'Rey',
                'age' => 24,
                'email' => 'rey@mail.test'
            ]
        ];

        // foreach ($users as $user) {
        //     if ($user['id'] == $id) {
        //         return $user;
        //     } else {
        //         return [];
        //     }
        // }

        // return collect($users)->firstWhere('id', $id);
        return collect($users)->where('id', $id)->first();
    }
    public function posts()
    {
        return $this->hasMany(Post::class);



        //return $this->hasOne()
        //return $this->hasOneThrough()
        //return $this->hasManyThrough()
    }
}
