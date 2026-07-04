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
                <form action="tm_crt.php" method="POST">
                    <div class="entries">
                        <label>Team Id</label>
                        <input type="text" name="t_id" placeholder="Enter id" required>
                    </div>
                    <div class="entries">
                        <label>Team Name</label>
                        <input type="text" name="t_name" placeholder="Enter Name" required>
                    </div>
                    <div class="entries">
                        <label>Matches Won</label>
                        <input type="text" name="mw" placeholder="Enter Matches Won" required>
                    </div>
                    <div class="entries">
                        <label>Matches Lost</label>
                        <input type="text" name="ml" placeholder="Enter Matches Lost" required>
                    </div>
                    <div class="entries">
                        <label>Matches Draw</label>
                        <input type="text" name="md" placeholder="Enter Matches Draw" required>
                    </div>
                    <div class="entries">
                        <label>Status</label>
                        <input type="text" name="sta" placeholder="Enter Status" required>
                    </div>
                    <div class="entries">
                        <label>Country</label>
                        <input type="text" name="con" placeholder="Enter Country" required>
                    </div>
                    <button class="save_btn" type="submit" name="Save">Save</button>
                </form>
            </div>
        </div>
    </body>

    </html>