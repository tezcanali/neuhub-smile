<?php

use Stevebauman\Location\Facades\Location;

if (!function_exists('get_country_code')) {
    /**
     * Kullanıcının IP adresine göre ülke kodunu döndürür.
     * Türkiye'deyse 1, diğer ülkelerdeyse 2 döner.
     *
     * @return int
     */
    function get_country_code()
    {
        $ip = request()->ip();

        $location = Location::get($ip);

        if ($location && $location->countryCode === 'TR') {
            return true;
        }

        return false;
    }
}
