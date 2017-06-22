<?php

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 10-05-2017
 * Time: 13:58
 */
class Deck
{
    protected $_deck = [];
    protected $_hand;
    protected $_bet;

    public function __construct(PokerHand $pokerHand)
    {
        $this->openDeck();
        $this->shuffleDeck();
        $this->optimizeDeck();
        $this->bet();
    }

    protected function openDeck(){

        //load cards in _deck
        //for diamonds
        for ($i = 2; $i <= 14; $i++){
            array_push($this->_deck, ('D' . $i));
        }

        //for clubs
        for ($i = 2; $i <= 14; $i++){
            array_push($this->_deck, ('C' . $i));
        }

        //for hearts
        for ($i = 2; $i <= 14; $i++){
            array_push($this->_deck, ('H' . $i));
        }

        //for spades
        for ($i = 2; $i <= 14; $i++){
            array_push($this->_deck, ('S' . $i));
        }

    }

    protected function optimizeDeck(){

        return array_splice($this->_deck, 10, 42, null);

    }

    protected function shuffleDeck(){
       shuffle($this->_deck);
    }


    /**
     * @return array
     */
    public function getDeck(): array
    {
        return $this->_deck;
    }

    /**
     * @param $numCards number of cards to deal
     * @return array
     */
    public function dealCards($numCards) {
        $this->_hand->setHand(array_splice($this->_deck, 0, 5, null));

    }



    public function replaceCardsInHand(array $lockedCards,$hand){

        // validar se $lockedcards existe na _hand
        // substituir as cartas desepejadas pelas novas
        // a hand continua com 5 cartas



    }


}