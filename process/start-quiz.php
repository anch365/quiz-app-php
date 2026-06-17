<?php

session_start();

$_SESSION['quiz']['score'] = 0;
$_SESSION['quiz']['start_time'] = time();
$_SESSION['quiz']['question_id'] = 1;


header("Location: ../public/quiz.php");
exit();

?>