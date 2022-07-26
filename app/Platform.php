<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    protected static function booted()
    {
        static::deleting(function ($game) {
            if ($game->games()->exists()) {
                throw new \Exception('Related game found');
            }
        });
    }
}
