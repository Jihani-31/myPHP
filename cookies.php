<<?php
//setcookie($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false);
//setcookie('language','Sinhala',time()+60*60);
if(isset($_COOKIE['language'])){
    $lang=$_COOKIE['language'];
    echo "selected {$lang}";
}
else{
    setcookie('language','Sinhala',time()+60*60);
}

//setcookie('language',NULL,-time()+60*60);            removecookiew

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    
</body>
</html>