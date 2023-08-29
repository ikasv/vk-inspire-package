<?php

use Illuminate\Support\Facades\Route;
use Vk\Inspire\Http\Controllers\VkInspireController;

Route::group(['namespace' => 'Vikassoftechure\Inspire\Http\Controllers'], function(){
    Route::get('daily-inspire', [VkInspireController::class, 'index'])->name('vk-daily-inspire');
});