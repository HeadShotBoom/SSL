<pre>
<?php

$data = file_get_contents('http://www.omdbapi.com/?t=goodfellas');
echo $data;
echo "<hr />";

$dictionary = file_get_contents('dictionary.txt');
$file = explode(' ', $dictionary);
foreach($file as $key => $info){
    echo "{$key}:{$info}<br />";
}

?>
</pre>