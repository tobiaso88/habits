<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'regularity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWhereUser(Builder $query, User $user)
    {
        return $query->where('user_id', $user->id);
    }
}
