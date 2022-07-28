<?php

class Games

{
public static $gamesPlayed = [];
public static $opponentName= [];
protected static $playerName;

public function __construct($playerName, $opponentName)
{
self::$gamesPlayed = "$playerName vs  $opponentName";
self::$opponentName = $opponentName;
self::$playerName = $playerName;
print var_dump(self::$gamesPlayed);
print var_dump(self::$opponentName);
}

public function getGamesPlayed()

{
  var_dump(self::$gamesPlayed);
}

}


class Player extends Games

{
  print parent::$gamesPlayed;
}


// print var_dump(Games::$opponentName);

$playGame = new Player('george','harry');



3,846.24 