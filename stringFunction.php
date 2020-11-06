<?php

$first="GOOD ";
$last="morning";

$new= $first;
$new .=$last;       // noted .=

echo $new;
echo "<br>";

echo strtolower($new);     //all simple
echo "<br>";
echo strtoupper($new);
echo "<br>";
echo ucfirst($new);
echo "<br>";
echo ucwords($new);

echo "<br>";

$len= strlen($new);
echo $len;



?>


<br>
