<?php
require_once 'tarotReading.php';

$reading = getCards(10, $deck);
$orientation = getOrientations(10);
echo "<table id=\"horse\">
<tr>
    <td id=\"horse\"></td>
    <th id=\"stuff\">PRESENT</th>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>";
    printImage($orientation, $reading, 0);
    echo "<td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 0);  
    echo "</td>
    <td id=\"horse\"></td>
</tr>
<tr>
    <th id=\"stuff\">DIFFICULTIES</th>
    <td id=\"horse\"></td>
    <th id=\"stuff\">RESPONSIBILITIES</th>
</tr>
<tr>";
    printImage($orientation, $reading, 2);
    echo "<td id=\"horse\"></td>";
    printImage($orientation, $reading, 1);
echo "</tr>
<tr>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 2); 
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 1); 
    echo "</td>
</tr>
<tr>
    <th id=\"stuff\">OBSTACLES</th>
    <td id=\"horse\"></td>
    <th id=\"stuff\">SUPPORT</th>
</tr>
<tr>";
    printImage($orientation, $reading, 4);
    echo "<td id=\"horse\"></td>";
    printImage($orientation, $reading, 3);
echo "</tr>
<tr>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 4); 
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 3); 
    echo "</td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <th id=\"stuff\">ACHIEVIMENTS</th>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>";
    printImage($orientation, $reading, 5);
    echo "<td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 5); 
    echo "</td>
    <td id=\"horse\"></td>
</tr>
<tr>
    <th id=\"stuff\">WORK, HEALTH, AND COMMUNICATION</th>
    <td id=\"horse\"></td>
    <th id=\"stuff\">ATTRACTION AND RELATIONSHIPS</th>
</tr>
<tr>";
    printImage($orientation, $reading, 7);
    echo "<td id=\"horse\"></td>";
    printImage($orientation, $reading, 6);
echo "</tr>
<tr>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 7); 
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 6); 
    echo "</td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <th id=\"stuff\">HIDDEN INFLUENCES</th>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>";
    printImage($orientation, $reading, 8);
    echo "<td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 8); 
    echo "</td>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <th id=\"stuff\">THE PHYSICAL WORLD</th>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>";
    printImage($orientation, $reading, 9);
    echo "<td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
    printMeaning($orientation, $reading, 9); 
    echo "</td>
    <td id=\"horse\"></td>
</tr>
</table>";
?>