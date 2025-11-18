<?php 


declare(strict_types=1);


require_once('Song.php');

$song =  new Song('Gbewa',20);

print_r($song->name."\n");
print_r($song->numberOfPlays);






?>