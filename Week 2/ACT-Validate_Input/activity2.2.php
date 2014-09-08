<?php

$school_email = $_POST['semail'];
$personal_email = $_POST['pemail'];
echo $personal_email ."<br />";
echo $school_email ."<br />";

if (filter_var($personal_email, FILTER_VALIDATE_EMAIL) != false){
    echo "{$personal_email} is a valid email address.<br />";
} else {
    echo "{$personal_email} is not a valid email adress.<br />";
}
$pattern = '/fullsail.edu/i';
$validate = preg_match($pattern, $school_email);
if ($validate == 1){
    echo "{$school_email} is a valid email address.<br />";
}else {
    echo "{$school_email} is not a valid email address.<br />";
}

?>