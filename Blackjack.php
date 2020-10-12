<?php

//Create a class called Blackjack in the file Blackjack.php
//Add 3 private properties: player, dealer, deck
//Add the following public methods: getPlayer, getDealer

class Blackjack {

    private $player;
    private $dealer;
    private $deck;

    public function getPlayer(){}
    public function getDealer(){}

    public function __construct(){

        //In the constructor do the following:
        //Instantiate the Player class twice, insert it into the player property and a dealer property.

        $this -> player = new Player;
        $this -> dealer = new Player;

        //Create a new deck object (code has already been written for you!).
        $this -> deck = new Deck;

        //Shuffle the cards with shuffle method on deck.
        $this -> deck = shuffle($this->cards);
        
    }








}