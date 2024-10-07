<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Nonstandard\Uuid;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * making the uuid as the primaryKey
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * To retain the value from the url
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
    ];

    /**
     * event listener for model
     * the booted method of the model
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];

    /**
     * Summary of user where post belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
