<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];



    protected $casts =[
        'uuid' => 'string',
    ];
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model){
            $model->uuid = Uuid::uuid4()->toString();
        });
    }

    /**
     * get the user that owns the post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this -> belongsTo(User::class);
    }
}
