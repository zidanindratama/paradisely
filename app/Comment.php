<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'exploration_id',
        'nama',
        'email',
        'komentar'
    ];

    public function eksplorasi(){
        return $this->belongsTo(Exploration::class);
    }

    // return random_color();
}
