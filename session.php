<?php
    session_start();
    $_SESSION['user_id']=30;
    $_SESSION['name']='jihani';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
    <?php
        echo "user id {$_SESSION['user_id']}";  //print session variable
    ?>

</body>
</html>