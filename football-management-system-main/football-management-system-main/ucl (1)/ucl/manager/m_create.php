<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

if (isset($_POST['Save'])) {
    $manager_name = $_POST['manager_name'];
    $manager_id = $_POST['manager_id'];
    $team_id = $_POST['team_id'];
    // echo "<div>'$pl_id'</div>";
    $conn->query("insert into manager(m_name,m_id,team_id) values('$manager_name','$manager_id','$team_id');") or die($conn->error);
    header('Location: mangr.php');
}


//DELETE ROW FROM GAME TABLE
$id = $_GET['delete'];
$conn->query("DELETE FROM manager WHERE m_id='$id'") or die($conn->error);
header('Location: mangr.php');
