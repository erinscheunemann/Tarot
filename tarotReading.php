<?php
echo <<<_HEADER
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tarotStyle.css">
        <title>Tarot Reading</title>
    </head>
_HEADER;

echo <<<_CHOICE
<body>
    <section id="myheader">
        <h1>Tarot Reading</h1>
    </section>
    <form id="myform" method="post" action="tarotReading.php">
        <label for="spread">Spread:</label>
        <select name="spread" id="spread">
            <option value="one">One Card</option>
            <option value="three">Three Card</option>
            <option value="five">Five Card</option>
            <option value="horse">Horseshoe</option>
            <option value="tree">Tree of Life</option>
        </select>
        <input type="submit" value="Get Reading" id="read">
    </form>
_CHOICE;

require_once 'functions.php';
if(empty($_POST)){ //if the user has not submited choices no questions will be shown
    echo "<p>Awaiting choices...</p></body></html>";
} else {
    $file = file_get_contents("tarot-deck.json");
    $placeholder = json_decode($file);
    $deck = $placeholder->cards;
    echo "<div id=\"tables\">";
    switch($_POST["spread"]){
        case "one":
            require_once 'one.php';
            break;
        case "three":
            require_once 'three.php';
            break;
        case "five":
            require_once 'five.php';
            break;
        case "horse":
            require_once 'horse.php';
            break;
        case "tree":
            require_once 'tree.php';
            break;
        default:
            echo "<p>not added yet...</p>";
    }
    echo "</div></body></html>";
}
?>