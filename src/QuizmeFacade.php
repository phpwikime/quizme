<?php

namespace Phpwikime\Quizme;

use \Illuminate\Support\Facades\Facade;

class QuizmeFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'quizme';
    }
}