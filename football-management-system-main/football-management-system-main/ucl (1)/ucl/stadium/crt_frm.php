<<?php
    if (!session_id()) {
        session_start();
    }
    include_once('../db.php');
    $res = $conn->query("select game_id from game");
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
                <form action="stad_crt.php" method="POST">
                    <div class="entries">
                        <label>Stadium Id</label>
                        <input type="text" name="std_id" placeholder="Enter id" required>
                    </div>
                    <div class="entries">
                        <label>Stadium Name</label>
                        <input type="text" name="std_name" placeholder="Enter Name" required>
                    </div>
                    <div class="entries">
                        <label>Address</label>
                        <input type="text" name="addr" placeholder="Enter Address" required>
                    </div>
                    <div class="entries">
                        <label>Game</label>
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