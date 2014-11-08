<?php

$info = file_get_contents('data.json');
$this_stuff = json_decode($info, true);
//print_r ($this_stuff);
foreach($this_stuff as $child){
    foreach($child as $key => $values){
        echo $key . ' : ' . $values;
        echo '<br />';
    }
}

?>