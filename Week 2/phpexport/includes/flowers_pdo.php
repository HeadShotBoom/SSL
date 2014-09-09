<?php
$mysql = 'mysql:host=localhost;dbname=phpexport';
$sqlite = 'sqlite:~/Google Drive/School Work/Classes/SSL/Week 2/phpexport/includes/phpexport.db';

try {
    $db = new PDO($mysql, 'root', 'root');
    $sql = 'SELECT * FROM arrangements';
    $result = $db->query($sql);
    $errorInfo = $db->errorInfo();
    if (isset($errorInfo[2])){
        $error = $errorInfo[2];
    }
} catch(PDOException $e) {
    $error = $e->getMessage();
}
if (isset($error)){
    echo $error;
}else {
    echo "Ok";
}



?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Set Title Here</title>
    </head>
    <body>
    <table>
<?php while ($row = $result->fetch()) { ?>
    <tr>
            <td><?php echo $row[0]; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['price']; ?></td>
    </tr>
<?php } ?>


    </table>
    </body>
    </html>


