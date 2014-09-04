<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>
<?php


$colors = array(
    0 => "Red",
    1 => "Maroon",
    2 => "Blue",
    3 => "Navy",
    4 => "Green",
    5 => "Teal",
    6 => "Yellow",
    7 => "Gold",
    8 => "Purple",
    9 => "Magenta"
);


//This is part 1
foreach($colors as $attribute => $data){
    echo "Color {$attribute} is {$data}.<br />";
}

//This is part 2
$max = sizeof($colors);
for ($count=$max-1; $count>0;$count--){
    echo "Color {$count} is {$colors[$count]}.<br />";
}

//This is part 3
$max = sizeof($colors);
for ($count=0; $count<$max;$count++){
    if ($count % 2 == 0){
    echo "Color {$count} is {$colors[$count]}.<br />";
    }
}

?>
</body>
</html>


