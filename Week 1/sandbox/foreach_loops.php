<html lang="en">
<head>
    <title>For Each Loops</title>
</head>
<body>

<?php

$ages = array(4,8,15,16,23,42);

foreach($ages as $age){
    echo "Age: {$age}<br />";
}
?>


<?php

$person = array(
    "first_name" => "Daniel",
    "last_name" => "Carroll",
    "address" => "147 Treasure Way",
    "city" => "San Antonio",
    "state" => "Texas",
    "zip_code" => "78209"
);

foreach($person as $attribute => $data){
    $attr_nice = ucwords(str_replace("_", " ", $attribute));
    echo "{$attr_nice}: {$data}<br />";
}
?>

<?php

$prices = array(
    "Brand New Computer" => 2000,
    "1 Month of Lynda.com" => 25,
    "Learning PHP" => NULL
);

foreach($prices as $item => $price){
    echo "{$item}: ";
    if(is_int($price)) {
        echo "$" . $price;
    }else{
        echo "Priceless";
    }
    echo "<br />";

}

?>


</body>
</html>