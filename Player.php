<?php

//Create a class called Player in the file Player.php.
//Add 2 private properties: cards (array), lost (bool, default = false)
//Add a couple of empty public methods to this class: hit, surrender, getScore, hasLost

class Player {
    private array $cards;
    private bool $lost = false;

    public function hit(){}
    public function surrender(){}
    public function getScore(){}
    public function hasLost(){}

//In the constructor of the Player class; Make it require the Deck object.
//Pass this Deck from the Blackjack constructor.
//Now draw 2 cards for the player. You have to use existing code for this from the Deck class.

    public function __construct(Deck $deck){


        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();

    }


}
