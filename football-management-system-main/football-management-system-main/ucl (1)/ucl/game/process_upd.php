<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $Date = $_POST['Date'];
    $Match = $_POST['Match'];
    $Score = $_POST['Score'];
    $Result = $_POST['Result'];

    // $conn->query("insert into game (date,game_id,score,result) values('$Date','$Match','$Score','$Result')") or die($conn->error);
    $conn->query("update game set date='$Date',score='$Score',result='$Result' where game_id='$Match'") or die($conn->error);
    header('Location: games.php');
}
