<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $refreename = $_POST['refreename'];
    $refreeid = $_POST['refreeid'];
    $gameid = $_POST['game_id'];
    // echo "<div>'$pl_id'</div>";
    $conn->query("insert into referee(r_name,r_id,game_id) values('$refreename','$refreeid','$gameid');") or die($conn->error);
    header('Location: refree.php');
}


//DELETE ROW FROM GAME TABLE
$id = $_GET['delete'];
$conn->query("DELETE FROM referee WHERE r_id='$id'") or die($conn->error);
header('Location: refree.php');
