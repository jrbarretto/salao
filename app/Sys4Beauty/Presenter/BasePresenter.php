<?php

namespace Sys4Beauty\Presenter;

use Laracasts\Presenter\Presenter;

abstract class BasePresenter extends Presenter
{
    public function shortName($quantity = 10){
        return substr($this->name,0,$quantity);

    }
}
