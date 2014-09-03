<html lang="en">
<head>
    <title>Null</title>
</head>
<body>

<?php
$var1 = null;
$var2 = "";
?>
Var1 Null? <?php echo is_null($var1); ?><br />
Var2 Null? <?php echo is_null($var2); ?><br />
Var3 Null? <?php echo is_null($var3); ?><br />
<br />
Var1 Set? <?php echo isset($var1); ?><br />
Var2 Set? <?php echo isset($var2); ?><br />
Var3 Set? <?php echo isset($var3); ?><br />
<br />
<?php $var3 = "0";?>
Var1 Empty? <?php echo empty($var1); ?><br />
Var2 Empty? <?php echo empty($var2); ?><br />
Var3 Empty? <?php echo empty($var3); ?><br />


</body>
</html>