<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
<?php

$numbers = array(4,8,15,16,23,42);
echo $numbers[1]

?>

<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?><br />
<?php echo $mixed[2]; ?><br />


<!--THIS DOSENT WORK!!!-->
<?php // echo $mixed[3]; ?><br />
<?php // echo $mixed; ?><br />


<!--This does-->
<?php echo $mixed[3][1]; ?><br />

<?php $mixed[2] = "cat"; ?>
<?php $mixed[4] = "mouse"; ?>
<?php $mixed[] = "horse"; ?>


<pre>
<?php echo print_r($mixed); ?><br />
</pre>

<?php
//5.4 added the short syntax
$array = [1,2,3];
?>

</body>
</html>