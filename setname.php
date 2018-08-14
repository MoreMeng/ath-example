<?php
session_start();

// $_SESSION['name'] = "MOREMENG";
if(!empty($_POST)) {
    print_r($_POST);

    $_SESSION['name'] = $_POST['name'];
}

?>
<a href="./">HOME</a>


