<?php
$uploaddir = './uploads/'; //physical path on Apache
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    if ($_FILES['userfile']['type']== 'image/jpeg'){
        echo "<img src='{$uploadfile}' alt='Uploaded Image' width='100%' />";
    }else {
        echo "This is not an image.";
    }
} else {
    echo "Possible file upload attack!\n";
}
?>