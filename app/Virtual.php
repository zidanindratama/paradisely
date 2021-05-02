<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virtual extends Model
{
    protected $fillable = [
        'nama', 'gambar', 'slug', 'link_virtual'
    ];
}
