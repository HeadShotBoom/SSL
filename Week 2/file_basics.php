<?php

// __FILE__ is a superglobal that represents the filename of the file from which it was called. (THIS FILE)
echo __FILE__ . "<br />";
echo __LINE__ . "<br />";
echo dirname(__FILE__)."<br />";
echo __DIR__ . "<br />";

// File exists searches to see if a file OR DIRECTORY exists that matches what has been entered.
echo file_exists(__FILE__) ? 'yes' : 'no';
echo "<br />";


//Searches the directory of this file to check for basic.html
echo file_exists(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";



//is_file verifys that what you are searching for is a file, a driectory wont trigger true
echo is_file(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";

echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br />";

//is_dir does what you would expect compared to is_file
echo is_dir(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";

echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br />";

echo is_dir('..') ? 'yes' : 'no';
echo "<br />";

?>