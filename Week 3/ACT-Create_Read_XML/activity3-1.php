<?php
$xmlstring = file_get_contents('data.xml');
$parseXML = new SimpleXMLElement($xmlstring);

foreach($parseXML->children() as $child){
    foreach($child->children() as $secondChild){
        $name =  $secondChild->getName();
        echo $name . ' : ' . $child->$name . '<br />';
    }
}
?>