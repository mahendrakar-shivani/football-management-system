<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $manager_name = $_POST['manager_name'];
    $manager_id = $_POST['manager_id'];
    $team_id = $_POST['team_id'];

    // $conn->query("insert into game (date,game_id,score,result) values('$Date','$Match','$Score','$Result')") or die($conn->error);
    $conn->query("update manager set m_name='$manager_name',m_id='$manager_id',team_id='$team_id' where m_id='$manager_id'") or die($conn->error);
    header('Location: mangr.php');
}
