<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }

    /**
     * Get all of the comments for the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function audios()
    {
        return $this->hasMany(Audio::class, 'subcat_id', 'id');
    }
   
   
}
