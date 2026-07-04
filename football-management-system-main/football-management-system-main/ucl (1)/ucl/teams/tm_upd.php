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
    $conn->query("update team set name='$t_name',m_won='$mw',m_lost='$ml',m_drawn='$md',status='$sta',country='$con' where team_id='$t_id'") or die($conn->error);
    header('Location: team.php');
}
