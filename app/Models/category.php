<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class category extends Model
{
    use HasTranslations;
    protected $fillable = ['name','slug','description','image','is_showing','is_popular','meta_title','meta_description','meta_keywords'];
    public $translatable = ['name','description','meta_title','meta_description'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

