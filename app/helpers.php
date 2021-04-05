<?php

use App\Models\User;

if ( ! function_exists('user')) {
    function user()
    {
        return auth()->check() ? auth()->user() : new User();
    }
}
