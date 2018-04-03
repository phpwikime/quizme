<?php

Route::group(['prefix'=>'quizme'],function (){
    Route::get('/',function (){
        return ['TEST','Demo'];
    });
});
