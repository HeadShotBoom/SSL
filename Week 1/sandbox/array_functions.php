<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>

<?php $numbers = array(8,23,15,42,16,4); ?>
Count: <?php echo count($numbers); ?><br />
Max Value: <?php echo max($numbers); ?><br />
Min Value: <?php echo min($numbers); ?><br />
<br />
<pre>
Sort: <?php echo sort($numbers); print_r($numbers); ?><br />
Reverse Sort: <?php echo rsort($numbers); print_r($numbers); ?><br />
</pre>
<br />
Implode: <?php echo $num_string = implode(" * ", $numbers);?><br />
Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
<br />

15 in array?: <?php echo in_array(15, $numbers);?><br />
19 in array?: <?php echo in_array(19, $numbers);?><br />


</body>
</html>