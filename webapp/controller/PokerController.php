<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;

class PokerController extends BaseController
{
    public function game(){

        return View::make('Game.gameview');
    }

    public function bet1(){

        return View::make('Game.betone');
    }
    public function bet2(){

        return View::make('Game.bettwo');
    }
    public function bet3(){

        return View::make('Game.betthree');
    }
    public function bet4(){

        return View::make('Game.betfour');
    }
    public function bet5(){

        return View::make('Game.betfive');
    }
}