<?php

namespace App\Models;

use App\Support\Constant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    
    protected $fillable = ['name', 'logo', 'description', 'slug'];

    public function products(): HasMany 
    {
        return $this->hasMany(Product::class, 'categorie_id'); 
    }

    public function getLogoUrlsAttribute()
    {
        return  $this->logo ? asset(Constant::Storage.$this->logo) : asset(Constant::Default_logoNavBar_site);
    }
}
