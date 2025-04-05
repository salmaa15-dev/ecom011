<?php
namespace App\Support;

use Exception;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Category;

class DataShare {

    public static function settings()
    {
       try{
            $setting = Setting::first();
            view()->share([
                'title'          => $setting->title_site ?? Constant::Default_title_site,
                'phone'          => $setting->phone_site ?? Constant::Default_phone_site,
                'email'          => $setting->email_site ?? Constant::Default_email_site,
                'adresse'        => $setting->adresse_site ?? Constant::Default_adresse_site,
                'instagram'      => $setting->instagram_site ?? Constant::Default_instagram_site,
                'facebook'       => $setting->facebook_site ?? Constant::Default_facebook_site,
                'map'            => $setting->map_site ?? Constant::Default_map_site,
                'description'    => $setting->description_site ?? Constant::Default_description_site,
                'logo_nav_bar'   => $setting->Logo_nav_bar_site ?? asset(Constant::Default_logoNavBar_site),
                'logo_footer'    => $setting->logo_footer_site ?? asset(Constant::Default_logoFooter_site),
                'agency'         => Constant::Agency,
                'categorysByPro' => Category::with(['products' => fn($q) => $q->where('remove', false)])->has('products')->take(5)->get(),
                'pages'          => Page::select('slug')->take(10)->get(),
                'logo'           => asset(Constant::Logo),
                'currency'       => Constant::currency,
                'author'         => Constant::author,
                'paypal'           => Constant::paypal_log,
                'visa'           => Constant::visa_log,
                'mastercard'           => Constant::mastercard_log
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }
}