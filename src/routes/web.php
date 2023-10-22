<?php

namespace Randika\Contact\Http\Controllers;


use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;


Route::group(['namesapace'=>'Randika\Contact\Http\Controllers'],function(){

    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'send']);
});


?>
