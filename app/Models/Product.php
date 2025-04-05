<?php

namespace App\Models;

use App\Support\Constant;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'image', 
        'price', 
        'sale', 
        'etat_sold', 
        'categorie_id',
        'available_pack',
        'pack',
        'view',
        'created_at',
        'remove'
    ];


    public function category() {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function customers(){

        return $this->belongsToMany(Customer::class, 'orders', 'product_id', 'customer_id');
    }

    public function scopeType($query, $etat) {
        return $query->where(['pack' => $etat]);
    }

    public function scopePack($query) {
        return $query->where(['pack' => true, 'available_pack' => true])->orderby('created_at', 'DESC');
    }

    public function scopeSale($query) {
        return $query->select('image','price', 'sale', 'title', 'slug')->where('etat_sale', true)->orderby('sale', 'ASC')->get();
    }

    public function getPercentAttribute() {
        if($this->sale > 0 && $this->etat_sale):
            $percent = ($this->price - $this->sale) / $this->price * 100;
            return "-".number_format($percent)."% <i class='fas fa-arrow-down'></i>";
        endif;
    }

    public function getTitleLimitAttribute() {
        
        return Str::limit($this->title, 50);
    }


    public function getDescriptionLimitAttribute() {
        
        return Str::limit($this->description, 50);
    }

    public static function view($slug)
    {
        $p = Product::where('slug', $slug)
                ->select('view', 'id')->first();

        $p->update([
            'view' => $p->view + 1
            ]);
    }

    public function getLogoUrlsAttribute()
    {
        return  $this->image ? asset(Constant::Storage.$this->image) : asset(Constant::Default_logoNavBar_site);
    }

    public function getPriceNetAttribute()
    {
        return $this->etat_sale ? $this->sale : $this->price;
    }

    public function getEtatDiscountAttribute()
    {
        return $this->etat_sale ? 'Available': 'Unavailable';
    }

    public function getEtatAvailablePackAttribute()
    {
        return $this->available_pack ? 'Available': 'Unavailable';
    }

}

