<?php

use Stevebauman\Location\Facades\Location;

if (!function_exists('get_country_code')) {
    function get_country_code()
    {
        try {
            $ip = request()->ip();
            $location = Location::get($ip);

            if ($location && $location->countryCode === 'TR') {
                return true;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }
}
