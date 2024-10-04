<?php

namespace App\Models;

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
     * Get a list of users.
     *
     * @return array
     */
    public function getUsers() // Renamed to getUsers
    {
        return [
            [
                'id' => 1,
                'name' => 'William',
                'age' => 40,
                'email' => 'alambatinw@gmail.com',
            ],
            [
                'id' => 2,
                'name' => 'Junren',
                'age' => 35,
                'email' => 'junren@gmail.com',
            ],
        ];
    }
}
