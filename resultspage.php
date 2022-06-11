<?php
require_once('includes/resulttarget.php');
?>

<!DOCTYPE html>
<head>
    <title>
        Results
    </title>
    <link rel="stylesheet" href="includes/style6.css.php">
</head>
<body>
<div id="songresults">

    <h1>Spotify Top Results</h1>
    <?php

    echo
        "<table>\n
    <tr>\n" .
        "<th>" . $songs[0][TITLE] . "</th>\n" .
        "<th>" . $songs[0][ARTIST] . "</th>\n" .
        "<th>" . $songs[0][GENRE] . "</th>\n" .
        "<th>" . $songs[0][YEAR] . "</th>\n </tr>\n";
    tableDisplay($to_return, $search_results);
    echo "</table>\n";
    ?>
</div>

<div>

</div>
</body>
