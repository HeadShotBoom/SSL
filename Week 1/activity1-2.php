<html lang="en">
<head>
    <title>Whats My Grade</title>
</head>
<body>

<?php

$grades = array(94, 54, 89.9, 60.01, 102.1);

function grade_me($numbers){

foreach ($numbers as $grade){
    if($grade < 60){
        echo "Your grade was a {$grade}.You have earned an F<br />";
    }elseif ($grade >= 60 && $grade < 70 ){
        echo "Your grade was a {$grade}.You have earned a D<br />";
    }elseif ($grade >= 70 && $grade < 80){
        echo "Your grade was a {$grade}.You have earned a C<br />";
    }elseif ($grade >= 80 && $grade < 90) {
        echo "Your grade was a {$grade}.You have earned a B<br />";
    }else {
        echo "Your grade was a {$grade}. You have earned an A<br />";
    }
}
}

grade_me($grades);

?>

</body>
</html>