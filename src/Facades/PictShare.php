<?php namespace Lufias\PictShare\Facades;


use Illuminate\Support\Facades\Facade;

class PictShare extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'PictShare';
    }

}