<?php

function display_greeting(){
    $h=date('h');

    if($h >=0 and $h <=11 ){
        echo "good morning";
    }
    elseif( $h>=12 and $h<=17){
        echo "good afternoon";
    
    }
    else{
        echo "good evening";
    }
}


?>