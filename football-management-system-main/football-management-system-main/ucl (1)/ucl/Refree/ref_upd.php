<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $refreename = $_POST['refreename'];
    $refreeid = $_POST['refreeid'];
    $gameid = $_POST['gameid'];

    // $conn->query("insert into game (date,game_id,score,result) values('$Date','$Match','$Score','$Result')") or die($conn->error);
    $conn->query("update referee set r_name='$refreename',r_id='$refreeid',game_id='$gameid' where r_id='$refreeid'") or die($conn->error);
    header('Location: refree.php');
}
