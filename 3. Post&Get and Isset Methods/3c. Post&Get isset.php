<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<!-- // ! HEC BIR FORMUN BIR BIRINE QARISMAMASI UCUN BUNDAN ISTIFADE ET -->
<?php 
if(isset($_POST["post"])){
    echo $_POST["username"]."<br>";
    echo $_POST["username"];
}

if(isset($_POST["get"])){
echo $_POST["username"]."<br>";
echo $_POST["username"];
}
?>
<form action="" method="POST" >
    <label for="username">Username: </label><input type="text" placeholder="username" name="username"><br>
    <label for="username">Password: </label><input type="password" placeholder="password" name="password"><br>
    <button type="submit" name="post">Log In</button>
</form><br>
<form action="" method="GET">
    <label for="username">Username: </label><input type="text" placeholder="username" name="username"><br>
    <label for="username">Password: </label><input type="password" placeholder="password" name="password"><br>
    <button type="submit" name="get">Log In</button>
</form>

</body>
</html>