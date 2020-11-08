<?php
function get_name($month){
   // $month=2;

    switch($month){
        case 1: $month_val= "jan";break;
        case 2:$month_val="feb";break;
        default :$month_val= "invalid";
    }
    return $month_val;
}

echo get_name(2);
?>