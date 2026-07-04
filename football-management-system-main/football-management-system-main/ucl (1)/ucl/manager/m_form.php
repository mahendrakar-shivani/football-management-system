<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$res = $conn->query("select team_id from team");
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
            <form action="m_create.php" method="POST">
                <div class="entries">
                    <label>Manager Name</label>
                    <input type="text" name="manager_name" placeholder="Enter name" required>
                </div>
                <div class="entries">
                    <label>Manager Id</label>
                    <input type="text" name="manager_id" placeholder="Enter manager id" required>
                </div>
                <div class="entries">
                    <label>Team Id</label>
                    <!-- <input type="text" name="team_id" placeholder="Enter team id"> -->
                    <select name="team_id" id="cars" required>
                        <?php
                        while ($row = $res->fetch_object()) {
                            echo "<option value=\"$row->team_id\">$row->team_id</option>";
                        } ?>
                    </select>
                </div>
                <button class="save_btn" type="submit" name="Save">Save</button>
            </form>
        </div>
    </div>
</body>

</html>