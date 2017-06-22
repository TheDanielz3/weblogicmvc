<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

/**
 * Created by PhpStorm.
 * User: joaos
 * Date: 17/05/2017
 * Time: 13:19
 */
class PokerController
{
    public function GameView(){
        View::make('game.gameview');
    }

    public function SetBet(){

        $bet = $_POST['bet'];

        // validar se a bet está entre 1 a 5

        $d = new Deck($bet);

        $d->dealCards(5);

        $mao = $d->getHand();



        $_SESSION['GAMEDECK'] = $d;
        return View::make('game.lockedcards', [ 'mao' => $mao, 'bet' => $bet]);
    }


    function LockCards(){

        if (Session::has === false){

            return View::make ('home.index');

        }else{

            $d = Session::get('GAMEDECK');

            $locked = $_POST['lockedcards'];

            $d->replaceCardsInHand($locked);

            $hand = $d->getHand();

            $HE   = new JacksOrBetterHandEvaluator();

            $comb = $HE->evaluateHand($hand);

            $valor = $HE->getPrize($d->_bet,$comb);
            var_dump($locked);
            die();




        }


    }

    /*bet

    deals
    deal
    payout*/
}