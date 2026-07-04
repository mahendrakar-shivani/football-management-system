<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $t_name = $_POST['t_name'];
    $t_id = $_POST['t_id'];
    $mw = $_POST['mw'];
    $ml = $_POST['ml'];
    $md = $_POST['md'];
    $sta = $_POST['sta'];
    $con = $_POST['con'];
    $conn->query("insert into team values('$t_name','$t_id','$mw','$ml','$md','$sta','$con');") or die($conn->error);
    header('Location: team.php');
}


//DELETE ROW FROM GAME TABLE
$id = $_GET['delete'];
$conn->query("DELETE FROM team WHERE team_id='$id'") or die($conn->error);
header('Location: team.php');
