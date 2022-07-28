<?php

class Playlist
{
  private $songs = [];

  public function addSong(Song $song):void //we must have a song OBJ
  {
    $this->songs[] =$song; // This is interesting  
  }

  public function getSong():array //we must have a song OBJ
  {
    return $this->songs;  
  }

  public function getLength():int //return type declarations 
  {
  return count($this->songs); //this returns an int
  }



}