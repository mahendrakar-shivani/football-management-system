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
    $assists = $_POST['Assists'];
    echo "<div>'$pl_id'</div>";
    // $conn->query("insert into game (date,game_id,score,result) values('$Date','$Match','$Score','$Result')") or die($conn->error);
    $conn->query(" update players set p_name='$Player_Name',goals=$goals ,assists=$assists where p_id='$pl_id' ") or die($conn->error);
    header('Location: stats.php');
}
