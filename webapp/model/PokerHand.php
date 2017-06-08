<?php

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 11-05-2017
 * Time: 13:09
 */
class PokerHand
{

    protected $_hand = [];

    /**
     * @param array $hand
     */
    public function setHand(array $hand)
    {
        // validar o tamanho de hand (tem de ser = 5)

        for ($i=0 ; $i=4 ; $i++){
            $this->_hand = $hand;
        }


    }

    public function replaceCardsInHand(array $lockedCards, array $newCards){

        // validar se $lockedcards existe na _hand
        // substituir as cartas desepejadas pelas novas
        // a hand continua com 5 cartas



    }

    /**
     * @return array
     */
    public function getHand(): array
    {
        return $this->_hand;
    }


}