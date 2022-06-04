<?php

class Playlist
{
  public $songs = [];

  public function addSong(Song $song) //we must have a song OBJ
  {
    $this->songs[] =$song; // This is interesting  
  }
}