<?php
    session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
    <?php
        echo "user id {$_SESSION['user_id']} <br>";  //print session variable
        echo "user name: {$_SESSION['name']}";
    ?>

</body>
</html>