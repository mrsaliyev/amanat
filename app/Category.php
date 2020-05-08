<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use Translatable;
	
    protected $fillable = ['code', 'name', 'description', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
