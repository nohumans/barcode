<?php namespace Nohumans\Barcode\Facades;

use Illuminate\Support\Facades\Facade;

class DNS2DFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'DNS2D';
    }

}
