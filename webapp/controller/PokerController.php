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
    public function locked(){

        return View::make('Game.lockedcards');
    }

}