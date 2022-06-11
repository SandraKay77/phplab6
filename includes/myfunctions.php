<?php

require_once("constants6.php");

/**
 * @param $to_return
 * @param array $search_results
 * @return void
 */

function tableDisplay($to_return, array $search_results)
{
    for ($x = 0; $x < $to_return; $x++) {
        echo "<tr>\n";
        echo "    <td>" . $search_results[$x][TITLE] . "</td>\n";
        echo "    <td>" . $search_results[$x][ARTIST] . "</td>\n";
        echo "    <td>" . $search_results[$x][GENRE] . "</td>\n";
        echo "    <td>" . $search_results[$x][YEAR] . "</td>\n";
        echo "</tr>\n";
    }
}

?>
