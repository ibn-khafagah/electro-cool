<?php

use App\Models\Setting;

if (! function_exists('getSetting')) {
    function getSetting() {
        $setting = Setting::first();
        return $setting;
    }
}
if (!function_exists('getActiveRoutesHome')) {
    function getActiveRoutesHome($route)
    {
        $actives = request()->routeIs($route) ? ' active' : null;
        return $actives;
    }
}
