<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
    /**
     * Get User By Params
     *
     * @param [type] $id
     * @return void
     */
    public function getUser($id = null)
    {

        $users = [
            [
                "id" => 1,
                "name" => 'Rey',
                "age" => 23,
                "email" => "raf@gmail.com",
            ],
            [
                "id" => 2,
                "name" => 'Will',
                "age" => 40,
                "email" => "william@gmail.com",
            ],

        ];

        // foreach ($users as $user) {
        //     if ($user['id'] == $id) {
        //         $selected_user = $user;
        //         return $selected_user;
        //     } else {
        //        return [];
        //     }
        // }

        return collect($users)->where('id', $id)->first();

    }

    public function createUser(){
        
    }
}
