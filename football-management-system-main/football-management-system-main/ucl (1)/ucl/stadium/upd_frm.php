<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');
$id = $_GET['edit'];
$res = $conn->query("select * from stadium where s_id='$id'");
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
            <h1>Enter New Record</h1>
            <?php echo "
                <form action=\"stad_upd.php\" method=\"POST\">
                    <div class=\"entries\">
                        <label>Stadium Id</label>
                        <input type=\"text\" name=\"std_id\" placeholder=\"Enter id\" value=\"$row->s_id\" required readonly>
                    </div>
                    <div class=\"entries\">
                        <label>Stadium Name</label>
                        <input type=\"text\" name=\"std_name\" placeholder=\"Enter Name\" value=\"$row->s_name\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Address</label>
                        <input type=\"text\" name=\"addr\" placeholder=\"Enter goals\" value=\"$row->address\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Game</label>
                        <input type=\"text\" name=\"game_id\" placeholder=\"Enter goals\" value=\"$row->game_id\" required readonly>
                    </div>
                    <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
                </form>"
            ?>
        </div>
    </div>
</body>

</html>