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
    $conn->query("insert into stadium(s_name,s_id,address,game_id) values('$std_name','$std_id','$addr','$game');") or die($conn->error);
    header('Location: stad.php');
}


//DELETE ROW FROM GAME TABLE
$id = $_GET['delete'];
$conn->query("DELETE FROM stadium WHERE s_id='$id'") or die($conn->error);
header('Location: stad.php');
