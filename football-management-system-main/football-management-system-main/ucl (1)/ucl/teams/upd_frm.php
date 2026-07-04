<<?php
    if (!session_id()) {
        session_start();
    }
    include_once('../db.php');
    $id = $_GET['edit'];
    $res = $conn->query("select * from team where team_id='$id'");
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
                <h1>Enter New Record</h1>
                <?php echo "
                <form action=\"tm_upd.php\" method=\"POST\">
                    <div class=\"entries\">
                        <label>Team Id</label>
                        <input type=\"text\" name=\"t_id\" placeholder=\"Enter id\" value=\"$row->team_id\" readonly required>
                    </div>
                    <div class=\"entries\">
                        <label>Team Name</label>
                        <input type=\"text\" name=\"t_name\" placeholder=\"Enter Name\" value=\"$row->name\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Matches Won</label>
                        <input type=\"text\" name=\"mw\" placeholder=\"Enter Matches Won\" value=\"$row->m_won\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Matches Lost</label>
                        <input type=\"text\" name=\"ml\" placeholder=\"Enter Matches Lost\" value=\"$row->m_lost\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Matches Draw</label>
                        <input type=\"text\" name=\"md\" placeholder=\"Enter Matches Draw\" value=\"$row->m_drawn\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Status</label>
                        <input type=\"text\" name=\"sta\" placeholder=\"Enter Status\" value=\"$row->status\" required>
                    </div>
                    <div class=\"entries\">
                        <label>Country</label>
                        <input type=\"text\" name=\"con\" placeholder=\"Enter Country\" value=\"$row->country\" required>
                    </div>
                    <button class=\"save_btn\" type=\"submit\" name=\"Save\">Save</button>
                </form>" ?>
            </div>
        </div>
    </body>

    </html>