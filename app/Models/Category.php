<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts(){//menghubungkan model post dengn kategori
        return $this->hasMany(Post::class); //relasi dari 1 to n (hasMany)

    }
}
