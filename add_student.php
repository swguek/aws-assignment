<?php

session_start();

if(!isset($_SESSION['students'])){
    $_SESSION['students'] = [];
}

$_SESSION['students'][] = [

'student_id' => $_POST['student_id'],
'name' => $_POST['name'],
'programme' => $_POST['programme'],
'email' => $_POST['email']

];

header("Location: index.php");
exit();

?>
