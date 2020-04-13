<?php
Route::group(['namespace'=>'Kmd1992\Biometricfingerprint\Http\Controller'], function(){
    Route::get('attendance','AttendanceController@index')->name('attendance');
});

