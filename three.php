<?php
require_once 'tarotReading.php';

$reading = getCards(3, $deck);
$orientation = getOrientations(3);
echo "<table>
    <tr>
        <th>PAST</th>
        <th>PRESENT</th>
        <th>FUTURE</th>
    </tr>
    <tr>";
        printImage($orientation, $reading, 0);
        printImage($orientation, $reading, 1);
        printImage($orientation, $reading, 2);
    echo "</tr>
    <tr>
        <td>";
        printMeaning($orientation, $reading, 0);  
        echo "</td>
        <td>";
        printMeaning($orientation, $reading, 1); 
        echo "</td>
        <td>";
        printMeaning($orientation, $reading, 2); 
echo "</td>
    </tr>
</table>";

?>