<?php

Route::group(
    ['prefix' => 'admin'],
    function() {
        Route::any('/', 'SPAController@getSpa');
        Route::any('/{param1}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@getSpa');
    }
);


Route::group(
    ['prefix' => 'client'],
    function() {
        Route::any('/', 'SPAController@getSpa');
        Route::any('/{param}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@getSpa');
    }
);


Route::group(
    ['prefix' => 'test'],
    function() {
        Route::any('/', 'SPAController@getSpa');
        Route::any('/{param1}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@getSpa');
    }
);


Route::get('/', function () {
    return redirect('web');
});


Route::group(
    ['prefix' => 'web'],
    function() {
        Route::any('/', 'SPAController@getSpa');
        Route::any('/{param1}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}', 'SPAController@getSpa');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@getSpa');
    }
);
