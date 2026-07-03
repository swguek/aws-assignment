<?php

session_start();

$id = $_GET['id'];

if(isset($_SESSION['students'][$id])){
    unset($_SESSION['students'][$id]);
}

$_SESSION['students'] =
array_values($_SESSION['students']);

header("Location: index.php");
exit();

?>
