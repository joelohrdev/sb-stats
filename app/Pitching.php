<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitching extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'inning',
        'balls',
        'strikes',
        'outcome',
        'note',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
