<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Spotify Top Songs
    </title>
    <link rel="stylesheet" href="includes/style6.css.php">
</head>
<body>
<div>
    <h1>
        Top Spotify Songs
    </h1>
    <h2>
        2010 - 2019
    </h2>
</div>
<div id="searchform">
    <h4>Song Search Filter</h4>
    <form action="resultspage.php" method="post">
        <table>

            <tr>
                <td><label for="artist">Artist</label></td>
                <td>
                    <input type="text" id="artist" name="artist">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="count">Number of Results:</label>
                </td>
                <td>
                    <input type="number" id="count" name="count">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
        <br>
    </form>
</div>

</body>

</html>
