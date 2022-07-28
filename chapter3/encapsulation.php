<?php

require_once '../chapter1/Playlist.php';
require_once '../chapter1/Song.php';

$newSong = new Song('Yes',10);
$fakeSong = 'This not a New Song';

$beatlesSongs = new Playlist();
$beatlesSongs->getSong();



