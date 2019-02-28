<?php

Route::group(
    ['prefix' => 'admin'],
    function() {
        Route::any('/', 'SPAController@admin');
        Route::any('/{param1}', 'SPAController@admin');
        Route::any('/{param1}/{param2}', 'SPAController@admin');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@admin');
    }
);


Route::group(
    ['prefix' => 'client'],
    function() {
        Route::any('/', 'SPAController@client');
        Route::any('/{param}', 'SPAController@client');
        Route::any('/{param1}/{param2}', 'SPAController@client');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@client');
    }
);


Route::group(
    ['prefix' => 'test'],
    function() {
        Route::any('/', 'SPAController@test');
        Route::any('/{param1}', 'SPAController@test');
        Route::any('/{param1}/{param2}', 'SPAController@test');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@test');
    }
);

Route::group(
    ['prefix' => 'web'],
    function() {
        Route::any('/', 'SPAController@web');
        Route::any('/{param1}', 'SPAController@web');
        Route::any('/{param1}/{param2}', 'SPAController@web');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@web');
    }
);
