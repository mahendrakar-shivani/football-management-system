<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$id = $_GET['edit'];
$res = $conn->query("select m_name,m_id,team_id from manager where m_id='$id';");
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
            <?php echo "<form action=\"m_upd.php\" method=\"POST\">
            <div class=\"entries\">
                <label>Manager Name</label>
                <input type=\"text\" name=\"manager_name\" placeholder=\"Enter name\" value=\"$row->m_name\" required>
            </div>
            <div class=\"entries\">
                <label>Manager Id</label>
                <input type=\"text\" name=\"manager_id\" placeholder=\"Enter manager id\" value=\"$row->m_id\" readonly required>
            </div>
            <div class=\"entries\">
            <label>Team Id</label>
            <input type=\"text\" name=\"team_id\" placeholder=\"Enter team id\" value=\"$row->team_id\" readonly required>
            </div>
            <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
            </form>"
            ?>
        </div>
    </div>
</body>

</html>