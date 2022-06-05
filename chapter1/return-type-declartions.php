<?php

require_once 'Playlist.php'; //require class Playlist
require_once 'Song.php'; //require class Song


$playlist = new Playlist(); //create a new playlist object

$song1 = new Song('Oh Happy Days',2); // create a new song object
$song2 = new Song('I love You',3); // create a new song object

$playlist->addSong($song1); // call playlist method
$playlist->addSong($song2); // call playlist method


if($playlist->getLength() < 10)
{
 return print'Less than ten songs detected';
}