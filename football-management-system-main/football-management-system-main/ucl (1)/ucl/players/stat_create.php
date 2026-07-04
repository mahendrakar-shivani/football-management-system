<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $Player_Name = $_POST['Player_Name'];
    $Team = $_POST['Team'];
    $pl_id = $_POST['player_id'];
    $goals = $_POST['Goals'];
    $age = $_POST['age'];
    $assists = $_POST['Assists'];
    // echo "<div>'$pl_id'</div>";
    $conn->query("insert into players(p_name,p_id,age,team_id,goals,assists) values('$Player_Name','$pl_id',$age,'$Team',$goals,$assists);") or die($conn->error);
    header('Location: stats.php');
}


//DELETE ROW FROM GAME TABLE
$id = $_GET['delete'];
$conn->query("DELETE FROM players WHERE p_id='$id'") or die($conn->error);
header('Location: stats.php');
