<?php
require_once 'tarotReading.php';

$reading = getCards(5, $deck);
$orientation = getOrientations(5);
echo "<table>
    <tr>
        <th>PAST AND HOW IT LED TO THE PRESENT</th>
        <th>PRESENT</th>
        <th>HIDDEN INFLUENCES ON THE PRESENT</th>
        <th>ADVICE</th>
        <th>OUTCOME</th>
    </tr>
    <tr>";
        printImage($orientation, $reading, 0);
        printImage($orientation, $reading, 1);
        printImage($orientation, $reading, 2);
        printImage($orientation, $reading, 3);
        printImage($orientation, $reading, 4);
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
        <td>";
            printMeaning($orientation, $reading, 3);
        echo "</td>
        <td>";
            printMeaning($orientation, $reading, 4); 
echo "</td>
    </tr>
</table>";
?>