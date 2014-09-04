<html lang="en">
<head>
    <title>Activity 1-4</title>
</head>
<body>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

</body>
</html>