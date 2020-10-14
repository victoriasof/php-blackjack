<?php

//Create a class called Player in the file Player.php.
//Add 2 private properties: cards (array), lost (bool, default = false)


class Player {
    private array $cards;
    private bool $lost = false;
    //private Deck $deck;

//In the constructor of the Player class; Make it require the Deck object.
//Pass this Deck from the Blackjack constructor.
//Now draw 2 cards for the player. You have to use existing code for this from the Deck class.

    public function __construct(Deck $deck){

        for($i=0; $i<2; $i++){
            $this->card[]=$deck->drawCard();
        }

        //Tim made empty array first and then pushed

        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();

    }

    public function getCards(): array
    {
        return $this->cards;
    }

    //Add a couple of empty public methods to this class: hit, surrender, getScore, hasLost


    public function hit(){
        //hit should add a card to the player. If this brings him above 21, set lost property to true.

        $this->cards[] = $this->deck->drawCard();

        if($this->getScore()>21){
            $this->lost=true;
        }

    }

    public function surrender(){
        //surrender should make you surrender the game. (Dealer wins.)
        //This sets the property lost in the player instance to true.

        $this->lost= true;

    }

    public function getScore(){
        //getScore loops over all the cards and return the total value of that player.

        $playerScore = 0;
        $cards = $this->cards;

        foreach ($cards as $card){
            $playerScore += $card->getValue();
        }
        return $playerScore;
    }

    //stand does not have a method in the player class but will instead call hit on the dealer instance.


    //hasLost will return the bool of the lost property.
    public function hasLost(){

        return $this->lost;

    }

}

//extend the player class and extend it to a newly created dealer class.
//Change the Blackjack class to create a new dealer object instead of a player object for the property of the dealer.

//Now create a hit function that keeps drawing cards until the dealer has at least 15 points.
//The tricky part is that we also need the lost check we already had in the hit function of the player.

class Dealer extends Player {

    public function hit(Deck $deck){

        if($this->getScore()<15){

            do {
                parent::hit($deck);
            }
            while ($this->getScore()<15);
        }
    }
}



