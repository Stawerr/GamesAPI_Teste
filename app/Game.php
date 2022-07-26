<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'released',
        'director',
        'critic_score',
        'user_score'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }
}
