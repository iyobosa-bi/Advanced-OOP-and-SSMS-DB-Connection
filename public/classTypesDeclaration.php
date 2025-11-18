<?php 


require_once("Song.php");
require_once("Playlist.php");


$playList1= new Playlist();
$song1 =  new Song('BlackBird',100);
// var_dump($song1);
$song2 = new Song('Yesterday',2000);


$playList1 ->addSong($song1);
$playList1->addSong($song2);

var_dump($playList1->songs,JSON_PRETTY_PRINT);

foreach($playList1->songs as $key=>$val){
    
            var_dump($val->name);

}

print $playList1->getLength();





