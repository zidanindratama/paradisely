<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exploration extends Model
{
    protected $fillable = [
        'user_id',
        'province_id',
        'city_id',
        'category_id',
        'latitude',
        'longitude',
        'pulau',
        'nama',
        'slug',
        'alamat',
        'deskripsi',
        'gambar',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
