<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$id = $_GET['edit'];
$res = $conn->query("select date,game_id,score,result from game where game_id='$id';");
$row = $res->fetch_object();
?>




<!DOCTYPE html>
<html>

<head>
    <title>UCL DATABASE</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../navbar.css">
</head>

<body>
    <div class="forms">
        <div class="frm">
            <h1>Edit Record</h1>
            <?php echo "<form action=\"process_upd.php\" method=\"POST\">
            <div class=\"entries\">
                <label>Date&nbsp;&nbsp;&nbsp;</label>
                <input type=\"text\" name=\"Date\" placeholder=\"Enter date\" value=\"$row->date\">
            </div>
            <div class=\"entries\">
                <label>Match</label>
                <input type=\"text\" name=\"Match\" placeholder=\"Enter team1 vs team2\" value=\"$row->game_id\">
            </div>
            <div class=\"entries\">
            <label>Score</label>
            <input type=\"text\" name=\"Score\" placeholder=\"Enter score\" value=\"$row->score\">
            </div>
            <div class=\"entries\">
            <label>Result</label>
            <input type=\"text\" name=\"Result\" placeholder=\"Enter Winner\" value=\"$row->result\">
            </div>
            <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
            </form>"
            ?>
        </div>
    </div>
</body>

</html>