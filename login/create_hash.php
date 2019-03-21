<?php 
$pass = isset($_GET["pass"]) ? $_GET["pass"] : "";
if ($pass == "") {
    echo 'You need to pass in the password as an argument!\n Usage: http://localhost/login/create_hash.php?pass=myPassword';
} else {
    echo password_hash($pass, PASSWORD_DEFAULT);
}
?>