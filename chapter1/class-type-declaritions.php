
<?php

require_once 'Playlist.php';
require_once 'Song.php';


$playlist = new Playlist();

$song1 = new Song('Oh Happy Days',2);
$song2 = new Song('I love You',3);

$playlist->addSong($song1);
$playlist->addSong($song2);

print count($playlist->songs);

foreach($playlist->songs as $song)
{
  print $song->name .PHP_EOL;
  print $song->numberOfPlays.PHP_EOL;
}


