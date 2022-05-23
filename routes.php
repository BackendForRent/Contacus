<?php
use Goosy\Contacus\Http\Controllers\MessageController ;

Route::group(['prefix' => 'api/v1/constacus'],function() {
    Route::post('message', [MessageController::class,'insert']);
});