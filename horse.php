<?php
require_once 'tarotReading.php';

$reading = getCards(7, $deck);
$orientation = getOrientations(7);
echo "<table id=\"horse\">
<tr>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <th id=\"stuff\">OBSTACLES</th>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
</tr>
<tr>
    <td id=\"horse\"></td>
    <th id=\"stuff\">HIDDEN INFLUENCES</th>";
    printImage($orientation, $reading, 3);
    echo "<th id=\"stuff\">OUTSIDE INFLUENCES</th>
    <td id=\"horse\"></td>
</tr>
<tr>
    <th id=\"stuff\">PRESENT</th>";
    printImage($orientation, $reading, 2);
    echo "<td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 3); 
    echo "</td>";
    printImage($orientation, $reading, 4);
    echo "<th id=\"stuff\">SOLUTION</th>
</tr>
<tr>";
    printImage($orientation, $reading, 1);
    echo "<td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 2);
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 4); 
    echo "</td>";
    printImage($orientation, $reading, 5);
echo "</tr>
<tr>
    <td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 1);
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 5); 
    echo "</td>
</tr>
<tr>
<th id=\"stuff\">PAST AND HOW IT LED TO THIS PROBLEM</th>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <th id=\"stuff\">OUTCOME</th>
</tr>
<tr>";
    printImage($orientation, $reading, 0);
    echo "<td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>";
    printImage($orientation, $reading, 6);
echo "</tr>
<tr>
    <td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 0);
    echo "</td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"horse\"></td>
    <td id=\"stuff\">";
      
    printMeaning($orientation, $reading, 6);
    echo "</td>
</tr>
</table>";
?>