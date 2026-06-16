<?php

session_start();

$_SESSION['score'] = 0;
$_SESSION['start_time'] = time();

header("Location: ./quiz.php?id=1");
exit();

?>