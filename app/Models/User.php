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

    
    public function getUser($id = null){
        $users = [
            [
                'id' => 1,
                'name' => 'Nigel',
                'age' => 20,
                'email' => 'nigel@gmail.com',
            ],
            [
                'id' => 2,
                'name' => 'Vincent',
                'age' => 21,
                'email' => 'mark@gmail.com',
            ]
        ];

        // $selectedUser = null;

        // foreach($users as $user){
        //     if($user['id'] == $id) {
        //         return $user;
        //     } else {
        //         return [];
        //     }
        // }

        return collect($users)->firstWhere('id', $id);
    }

    public function getId($id = null){
        $number = $id;
        for ($x=0; $x < 0; $id++){
            
        }
    }
}
