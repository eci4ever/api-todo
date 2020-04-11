<?php

Route::group(['prefix' => 'v1', 'as' => 'public.'], function () {
    Route::apiResource('todos', 'TodosApiController');
});
