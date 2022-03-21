<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }
    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'id', 'subcat_id');
    }
}
