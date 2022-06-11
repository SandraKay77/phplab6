<?php

/**
* Author: Sandra Schreffler
* June 2022
*/

require_once('constants6.php');
require_once('myfunctions.php');

$count = $_POST[COUNT] + 1;
$artist = htmlspecialchars($_POST['artist']);
$artist = htmlspecialchars_decode($artist);

$songs = [];

$file = fopen('includes/SpotifyTop100.csv', 'r');

for ($i = 0; $i < 1001; $i++){
    $line = fgetcsv($file);
    if(!$line){
        break;
    }
    $songs[] = $line;
}

fclose($file);

$search_results = [];

foreach ($songs as $current_song) {
    if (strtolower($current_song[ARTIST]) == strtolower($artist)) {
        $search_results[] = $current_song;
    }
}

$result_count = count($search_results);
$to_return = 0;

if ($count < $result_count) {
    $to_return = $count;
} else {
    $to_return = $result_count;
}

?>



