<?php
function dd(&$ss){
    foreach($ss as &$val){
        $val = $val+1;
    }
    $val = $val+2;
}

$ss = array(1,2,3);
dd($ss);
?>