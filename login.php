<?php

if(isset($_POST['submit'])){
    //user has pressed the submit button
    $username=$_POST['username'];
    $password=$_POST['pword'];

    if($username=='jee' && $password=='j7'){
        echo "Login succefully";
    }

    else{
        echo "login Failed";
    }
}




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOG IN</title>
</head>
<body>
    <form action="process.php" method="post">
        Username:<input type="text" name="username" id="username"><br>
        Password:<input type="password" name="pword" id="password"><br>
        <input type="submit" value="Log In" name="submit">


    </form>

</body>
</html>