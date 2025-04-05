<?php

use App\Repositories\Contracts\BasketRepositoryContract;

    if(!function_exists('int_to_decimal')) {
        function int_to_decimal(float $number)
        {
            return number_format($number, 2);
        }
    }
    if(!function_exists('cart')) {
        function cart()
        {
            return app(BasketRepositoryContract::class);
        }
    }