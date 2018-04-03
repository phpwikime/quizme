<?php

namespace Phpwikime\Quizme;

use Illuminate\Support\ServiceProvider;

class QuizmeServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'./routes/web.php');
    }
}