<<?php
    if (!session_id()) {
        session_start();
    }
    include_once('../db.php');
    $id = $_GET['edit'];
    $res = $conn->query("select p_name,p_id,age,team_id,goals,assists from players where p_id='$id';");
    $row = $res->fetch_object();
    ?> <!DOCTYPE html>
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
                <?php echo "<form action=\"stat_upd.php\" method=\"POST\">
            <div class=\"entries\">
                <label>Player Id</label>
                <input type=\"text\" name=\"player_id\" placeholder=\"Enter id\" value=\"$row->p_id\" readonly required>
            </div>
            <div class=\"entries\">
                <label>Player Name</label>
                <input type=\"text\" name=\"Player_Name\" placeholder=\"Enter Name\" value=\"$row->p_name\" required>
            </div>
            <div class=\"entries\">
                <label>Team</label>
                <input type=\"text\" name=\"Team\" placeholder=\"Enter team id\" value=\"$row->team_id\" readonly required>
            </div>

            <div class=\"entries\">
                <label>Goals</label>
                <input type=\"number\" name=\"Goals\" placeholder=\"Enter goals\" value=\"$row->goals\" required>
            </div>
            <div class=\"entries\">
                <label>Assists</label>
                <input type=\"number\" name=\"Assists\" placeholder=\"Enter Assits\" value=\"$row->assists\" required>
            </div>
            <div class=\"entries\">
                <label>Age</label>
                <input type=\"number\" name=\"age\" placeholder=\"Enter age\" value=\"$row->age\" required>
            </div>
            <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
            </form>"
                ?>
            </div>
        </div>
    </body>

    </html>