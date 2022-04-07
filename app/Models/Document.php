<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }
}
