<?php

//this line makes PHP behave in a more strict way
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//we are going to use session variables so we need to enable sessions
session_start();

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening(); // call function

require 'Blackjack.php';
require 'Player.php';
//require 'Suit.php';
//require 'Card.php';
//require 'Deck.php';

const BLACKJACK = 21;

//Save the instance of the entire Blackjack object in the session (you're gonna need it)
$_SESSION['blackjack'] = new Blackjack();

$player = $_SESSION["blackjack"]->getPlayer();
$player = $_SESSION["blackjack"]->getDealer();

//Use forms to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)


if (isset($_POST["action"])){
    echo "game has started";
}
elseif($_POST["action"]=== "hit"){
    echo "player hit";
}
elseif($_POST["action"]=== "stand"){
    echo "player stand";
}
elseif($_POST["action"]=== "surrender"){
    //echo "player surrender";
    //$_SESSION["blackjack"]->getPlayer();
    $player->hasLost(); //Tim
}

//Use the class' methods to react to these actions.

?>

<!doctype html>

<form action="index.php" method="post">
    <input type="submit" name="action" value="hit">
    <input type="submit" name="action" value="stand">
    <input type="submit" name="action" value="surrender">
</form>

<!-- made buttons -->

