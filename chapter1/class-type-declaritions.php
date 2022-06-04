
<?php

require_once 'Playlist.php'; //require class Playlist
require_once 'Song.php'; //require class Song


$playlist = new Playlist(); //create a new playlist object

$song1 = new Song('Oh Happy Days',2); // create a new song object
$song2 = new Song('I love You',3); // create a new song object

$playlist->addSong($song1); // call playlist method
$playlist->addSong($song2); // call playlist method

print count($playlist->songs); //this is an array see Playlist.php

foreach($playlist->songs as $song)  //for every array element
{
  print $song->name .PHP_EOL; // get song property name
  print $song->numberOfPlays.PHP_EOL; // get song property numberOfPlays
}


