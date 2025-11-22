<?php

use App\Models\Blog;
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

if (!function_exists('getFooterBlogs')) {
    function getFooterBlogs()
    {
        $blogs = Blog::latest()->limit(3)->get();
        return $blogs;
    }
}
