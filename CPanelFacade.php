<?php

namespace Husseinzaher\CPanel;

use Illuminate\Support\Facades\Facade;

class CPanelFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'cpanel';
    }
}