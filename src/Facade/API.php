<?php


namespace App\API\Facade;


use Illuminate\Support\Facades\Facade;

class API extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'api';
    }
}