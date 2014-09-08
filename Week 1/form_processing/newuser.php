<?php
function register_user (){
    $user_info = $_POST;
    $password = $user_info['password'];
    $salt = md5(uniqid(mt_rand(), true));
    $format_string = '$2a$07$';
    $format_and_salt = $format_string . $salt;
    $hashed_password = crypt($password, $format_and_salt);
    $user_info['password']=$hashed_password;

    return $user_info;
}

function save_picture(){

    $uploaddir = './images/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        if ($_FILES['userfile']['type']== 'image/jpeg'){
            return $uploadfile;
        }else {
            $uploadfile = NULL;
            return $uploadfile;
        }
    } else {
        $uploadfile = NULL;
        return $uploadfile;
    }
}
$info = register_user();
$avatar = save_picture();
if ($avatar == NULL){
    foreach ($info as $key => $value){
        $attr_nice = ucwords(str_replace("_", " ", $key));
        echo "{$attr_nice}: {$value}<br />";
    }
    echo "You failed to upload an image for your avatar";
}else {
    foreach ($info as $key => $value){
        $attr_nice = ucwords(str_replace("_", " ", $key));
        echo "{$attr_nice}: {$value}<br />";
    }
    echo "<img src='{$avatar}' alt='Uploaded Image' width='100%' />";
}
?>