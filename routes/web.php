<?php

use Illuminate\Support\Facades\Route;
use RajTechnologies\RouteList\Http\Controllers\RouteListController;

// Route::group(config('route-list.routes.web'), function () {
    Route::get('route-list', [RouteListController::class, 'index'])->name('route-list');
// });
