<?php
require_once 'tarotReading.php';

$reading = getCards(1, $deck);
$orientation = getOrientations(1);
echo "<table>
    <tr>
        <th>WHAT TO KEEP IN MIND</th>
    </tr>
    <tr>";
        printImage($orientation, $reading, 0);
    echo "</tr>
    <tr>
        <td>";
            printMeaning($orientation, $reading, 0);
echo "</td>
    </tr>
</table>";
?>