<?php

/**
 * Created by PhpStorm.
 * User: joaos
 * Date: 17/05/2017
 * Time: 13:19
 */
class PokerController
{
    public function SetBet(){


        $bet = $_POST['bet'];
        $coluna = $bet;

        // validar se a bet está entre 1 a 5

        $d = new Deck($bet);

        $d->dealCards(5);

        $mao = $d->getHand();



        $_SESSION['GAMEDECK'] = $d;

        return View::make('poker.gamestart', [ 'mao' => $mao, 'bet' => $bet]);
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
            
            var_dump($locked);
            die();




        }


    }

    /*bet

    deals
    deal
    payout*/
}