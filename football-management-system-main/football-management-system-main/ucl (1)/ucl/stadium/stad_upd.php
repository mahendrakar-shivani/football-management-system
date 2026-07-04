<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $std_name = $_POST['std_name'];
    $std_id = $_POST['std_id'];
    $addr = $_POST['addr'];
    $game = $_POST['game_id'];
    $conn->query(" update stadium set s_name='$std_name',game_id='$game',address='$addr' where s_id='$std_id' ") or die($conn->error);
    header('Location: stad.php');
}
