<?php
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
