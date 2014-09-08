<?php


$file = 'filetest.txt';
if($handle = fopen($file, 'r')){
    $content = fread($handle, 30); //Each character is 1 byte
    fclose($handle);
}
//All text is returned on a single line, line breaks are counted as a character.
echo $content;
echo "<hr />";
// All text is returned as it was entered, line breaks arent counted.
echo nl2br($content);
echo "<hr />";

//use filesize to read whole file
$file = "filetest.txt";
if($handle = fopen($file, 'r')){
    $content =fread($handle, filesize($file));
    fclose($handle);
}
echo nl2br($content);
echo "<hr />";


//file_get_contents(): shortcut fot fopen/fread/fclose
//companion to shortcut file_put_contents
$content = file_get_contents($file);
echo $content;
echo "<hr />";


//Incrimental reading
$file = 'filetest.txt';
$content = "";
if($handle = fopen($file, 'r')){
    while(!feof($handle)){
    $content .= fgets($handle);
    }
    fclose($handle);
}
echo $content;
echo "<hr />";

?>