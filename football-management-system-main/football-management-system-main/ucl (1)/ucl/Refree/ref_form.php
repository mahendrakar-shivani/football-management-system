<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$res = $conn->query("select game_id from game");
// $row = $res->fetch_object();
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
            <h1>Add Record</h1>
            <form action="ref_create.php" method="POST">
                <div class="entries">
                    <label>Referee Name</label>
                    <input type="text" name="refreename" placeholder="Enter name" required>
                </div>
                <div class="entries">
                    <label>Referee Id</label>
                    <input type="text" name="refreeid" placeholder="Enter ID" required>
                </div>
                <div class="entries">
                    <label>Game Id</label>
                    <!-- <input type="text" name="team_id" placeholder="Enter team id"> -->
                    <select name="game_id" id="cars" required>
                        <?php
                        while ($row = $res->fetch_object()) {
                            echo "<option value=\"$row->game_id\">$row->game_id</option>";
                        } ?>
                    </select>
                </div>
                <button class="save_btn" type="submit" name="Save">Save</button>
            </form>
        </div>
    </div>
</body>

</html>