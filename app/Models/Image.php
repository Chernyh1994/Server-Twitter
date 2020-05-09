<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that should be guarded for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'path', 'name', 'mime', 'size'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
