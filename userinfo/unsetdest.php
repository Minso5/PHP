<?php
session_start();
$_SESSION['apple'] = $apple = 4;
$_SESSION['banana'] = $banana = 5;
$_SESSION['cherry'] = $cherry = 6;
?>
<a href="unset.php">session_unset function</a>
<a href="destory.php">session_destory function</a>