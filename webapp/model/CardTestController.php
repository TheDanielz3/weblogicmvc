<?php

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 10-05-2017
 * Time: 14:13
 */
class CardTestController
{

    public function index(){

    $deck = new Deck;

    \Tracy\Debugger::barDump($deck->getDeck(), 'PokerDeck Before Deal');

    $hand = $deck->dealCards(5);

    \Tracy\Debugger::barDump($hand, 'PokerHand');

     \Tracy\Debugger::barDump($deck->getDeck(), 'PokerDeck After Deal');


    }


}