<?php
if( isset($_POST['knopje'])) {
    echo "er wordt op het knopje gedrukt";
} else {

echo "op het knopje wordt nog niet gedrukt";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <fieldset>
    <label for="username">username</label><br>
    <input type="text" name="username" value="username">

    <br>

    <label for="password">password</label><br>
    <input type="text" name="password" valeu="password">
    </fieldset>

    <form action="method="post"> 
        <input type="submit" name="knopje">
    </form>
</body>
</html>