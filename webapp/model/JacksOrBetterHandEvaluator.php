<?php

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 11-05-2017
 * Time: 12:58
 */
class JacksOrBetterHandEvaluator implements PokerHandEvaluatorInterface
{
     const  NONE = 0;
     const JACKS_OR_BETTER = 1;
     const TWO_PAIR = 2;
     const THREE_OF_A_KIND = 3;
     const STRAIGHT = 4;
     const FLUSH = 5;
     const FULL_HOUSE = 6;
     const FOUR_OF_A_KIND = 30;
     const STRAIGHT_FLUSH = 50;
     const ROYAL_FLUSH = 250;

    protected $_currentHand;

    public function evaluateHand(array $hand ){

        $combination = NONE;

        // detetar a combinação de cartas na mão do jogador
        for ($i=0;$i==4;$i++){
           $hand[$i]= str_split($hand[$i]);
        }


        // colocar a melhor combinação na mão


        // ex: $this->_currentHand = JACKS_OR_BETTER

    }


    public function getPrize($bet){

        //validar $bet (tem de ser de 1 a 5)

        // é sempre assim exceto no Royal Flush *5
        //$credits = $this->_currentHand * $bet;
        //


        // devolve o númerto de créditos ganhos
    }



}