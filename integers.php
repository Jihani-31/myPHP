<?php

$var1=30;
$var2=40;

echo ((10+20+$var1)*$var2);



?>
<br>

<?php
echo sqrt(10);
echo "<br>";
echo pow(2,5);
echo "<br>";
echo rand();

echo "<br>";
echo 10/3;

$float_num=10.3456;
echo "<br>";
echo round($float_num,2);
echo "<br>";
$flag=0;
if(is_integer($float_num))
{
    $flag=1;
}
 if($flag==0)
 {
     echo "floating point number";
 }

?>

