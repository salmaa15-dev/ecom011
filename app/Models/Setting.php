<?php

namespace App\Models;

use App\Support\Constant;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'title',
        'email',
        'phone',
        'instagram',
        'facebook',
        'map',
        'description',
        'adresse',
        'logo1',
        'logo2',
        
    ];

    public function getPhoneSiteAttribute()
    {
        return $this->phone != null ? $this->phone : Constant::Default_phone_site;
    }

    public function getAdresseSiteAttribute()
    {
        return $this->adresse != null ? $this->adresse : Constant::Default_adresse_site;
    }

    public function getEmailSiteAttribute()
    {
        return $this->email != null ? $this->email : Constant::Default_email_site;
    }

    public function getFacebookSiteAttribute()
    {
        return $this->facebook != null ? $this->facebook : Constant::Default_facebook_site;
    }

    public function getInstagramSiteAttribute()
    {
        return $this->instagram != null ? $this->instagram : Constant::Default_instagram_site;
    }

    public function getMapSiteAttribute()
    {
        return $this->map;
    }

    public function getDescriptionSiteAttribute()
    {
        return $this->description != null ? $this->description : Constant::Default_description_site;
    }

    public function gettitleSiteAttribute()
    {
        return $this->title != null ? $this->title : Constant::Default_title_site;
    }

    public function getLogoNavBarSiteAttribute()
    {
        return $this->logo1 != null ? asset(Constant::Storage.$this->logo1) : asset(Constant::Default_logoNavBar_site);
    }

    public function getLogoFooterSiteAttribute()
    {
        return $this->logo2 != null ? asset(Constant::Storage.$this->logo2) : asset(Constant::Default_logoFooter_site);
    }
}
