<?php

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return Asolagmbh\Voyager\Facades\Voyager::setting($key, $default);
    }
}

if (!function_exists('menu')) {
    function menu($menuName, $type = null, array $options = [])
    {
        return Asolagmbh\Voyager\Models\Menu::display($menuName, $type, $options);
    }
}

if (!function_exists('voyager_asset')) {
    function voyager_asset($path, $secure = null)
    {
        return asset(config('voyager.assets_path').'/'.$path, $secure);
    }
}
