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


    public function getUser($id=null){
        //query here
        

            $users = [
                [
                'id' => 1,
                'name' => 'Nigel',
                'age' => 21,
                'email' => 'nigelcamba@gmail.com', 

            ],
            [
                'id' => 2,
                'name' => 'Jeah',
                'age' => 20,
                'email' => 'jeahcamba@gmail.com', 

            ]
        ];


        return collect($users)->where('id', $id)->first();
            // foreach($users as $user){
            //     if($user['id'] == $id) {
            //         return $user;
            //     }
            //     else{
            //         return [];
            //     }
            // }

        }
    
    

        public function posts(){
            
            return $this->hasMany(Post::class);
            // return $this->hasOneThrough(Post::class);
            // return $this->hasManyThrough(Post::class);
            // return $this->hasOne(Post::class);
            // return $this->newHasMany(Post::class);
            // return $this->newHasOneThrough(Post::class);
            // return $this->newHasManyThrough(Post::class);
         
        }
}
