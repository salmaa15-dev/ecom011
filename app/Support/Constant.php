<?php

namespace App\Support;



class Constant {

   const Storage =  'storage/'; 

   const Default_image_product = 'back-end/assets/images/logo/product-logo.png'; 

   const Default_image_category = 'back-end/assets/images/logo/category-logo.jpg'; 

   const Default_title_site = 'SHOP LOCAL';
   const Default_logoNavBar_site = 'front-end/assets/images/logo-footer.png'; 

   const Default_logoFooter_site = 'front-end/assets/images/logo-footer.png';
   
   const Logo = 'front-end/assets/images/logo.png';

   const paypal_log = 'front-end/assets/images/paypal.png';
   const visa_log = 'front-end/assets/images/visa.png';
   const mastercard_log = 'front-end/assets/images/tt.png';

   const Default_description_site = '';

   const Default_phone_site = 'Tel:****';

   const Default_email_site = 'exmple@gmail.com';

   const Default_facebook_site = 'https://www.facebook.com/';

   const Default_instagram_site = 'https://www.instagram.com/';

   const Default_map_site = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58349740.339268446!2d15.104258129297014!3d26.795850658565286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2s!4v1624656733938!5m2!1sfr!2s';

   const Default_adresse_site = 'Adresse:****';

   const NotificationType = 'App\Notifications\shopNotification';

   const Agency = 'Salma naim';

   const Date_Created_Site = 2021;

   const author = 'Salma naim and Aya elgarni';

   const currency = 'EURO';

   const customerByType = [
      [
          'customer' => 'New order',
          'color'    => 'new-order'
      ],
      
    //   [
    //      'customer' => 'New customer',
    //      'color'    => 'new-customer'
    //   ],
      [
         'customer' => 'No answer',
         'color'    => 'no-answer'
      ],
      [
         'customer' => 'Paid',
         'color'    => 'paid'
      ], 
      [
         'customer' => 'No-call',
         'color'    => 'no-call'
      ],
      [
         'customer' => 'Routing',
         'color'    => 'routing'
      ],
      [
         'customer' => 'Pending payment',
         'color'    => 'pending-payment'
      ]
  ];
}