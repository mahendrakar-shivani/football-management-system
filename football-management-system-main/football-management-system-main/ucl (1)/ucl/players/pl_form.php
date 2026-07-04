<<?php
    if (!session_id()) {
        session_start();
    }
    include_once('../db.php');
    $id = $_GET['edit'];
    $res = $conn->query("select team_id from team");
    // $row = $res->fetch_object();
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
                <h1>Enter New Record</h1>
                <form action="stat_create.php" method="POST">
                    <div class="entries">
                        <label>Player Id</label>
                        <input type="text" name="player_id" placeholder="Enter id" required>
                    </div>
                    <div class="entries">
                        <label>Player Name</label>
                        <input type="text" name="Player_Name" placeholder="Enter Name" required>
                    </div>
                    <div class="entries">
                        <label>Goals</label>
                        <input type="number" min="0" name="Goals" placeholder="Enter goals" required>
                    </div>
                    <div class="entries">
                        <label>Assists</label>
                        <input type="number" min="0" name="Assists" placeholder="Enter Assits" required>
                    </div>
                    <div class="entries">
                        <label>Age</label>
                        <input type="number" min="0" name="age" placeholder="Enter Age" required>
                    </div>
                    <div class="entries">
                        <label>Team</label>
                        <select name="Team" id="cars" required>
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