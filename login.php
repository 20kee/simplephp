#login.php
<?php
    $uid = $_GET["uid"];
    $upw = $_GET["upw"];

    if ($uid === "admin") {
        if ($upw === "admin") {
            echo "Login Success !";
        } else {
            echo "Wrong Password !";
        }
    } else {
        echo "Wrong Id !";
    }

?>

