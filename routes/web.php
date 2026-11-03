<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Models\User;

Route::get('/', function () {

Cache::get('all_users');

    return view('welcome');
});
