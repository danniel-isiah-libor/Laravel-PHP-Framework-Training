<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);



        //return $this->belongsToMany();
        //return $this->newBelongsToMany();
    }
}

//You do this in php tinker in terminal
//App\Models\User::select('*')->where('id', 1)->first() - to get specific data
//App\Models\User::select('*')->where('id', 1)->get() - to get all data
