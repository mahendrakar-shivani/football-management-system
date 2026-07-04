<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$id = $_GET['edit'];
$res = $conn->query("select r_name,r_id,game_id from referee where r_id='$id';");
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
            <?php echo "<form action=\"ref_upd.php\" method=\"POST\">
            <div class=\"entries\">
                <label>Referee Name</label>
                <input type=\"text\" name=\"refreename\" placeholder=\"Enter name\" value=\"$row->r_name\" required>
            </div>
            <div class=\"entries\">
                <label>Referee ID</label>
                <input type=\"text\" name=\"refreeid\" placeholder=\"Enter ID\" value=\"$row->r_id\" readonly required>
            </div>
            <div class=\"entries\">
            <label>Game ID</label>
            <input type=\"text\" name=\"gameid\" placeholder=\"Enter game ID\" value=\"$row->game_id\" raedonly required>
            </div>
            <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
            </form>"
            ?>
        </div>
    </div>
</body>

</html>