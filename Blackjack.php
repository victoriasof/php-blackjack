<?php

//Create a class called Blackjack in the file Blackjack.php
//Add 3 private properties: player, dealer, deck
//Add the following public methods: getPlayer, getDealer

require 'Deck.php';
require 'Suit.php';
require 'Card.php';
//linked files


class Blackjack {

    private $player;
    private $dealer;
    private $deck;

    public function getPlayer(){
        //return $this->player; //Tim
    }
    public function getDealer(){
        //return $this->dealer; //Tim
    }

    public function __construct(){

        //Create a new deck object (code in example.php).
        //Shuffle the cards with shuffle method on deck.

        $deck = new Deck();
        $deck->shuffle();

        foreach($deck->getCards() AS $card) {
            echo $card->getUnicodeCharacter(true);
            echo '<br>';

        }

        //In the constructor do the following:
        //Instantiate the Player class twice, insert it into the player property and a dealer property.

        $this -> player = new Player($deck);
        $this -> dealer = new Player($deck);

        //changed order

    }

}