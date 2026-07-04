<?php
if (!session_id()) {
    session_start();
}
include_once('../db.php');

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
            <h1>Enter a New Record</h1>
            <form action="process.php" method="POST">
                <div class="entries">
                    <label>Date&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="Date" placeholder="Enter Date" required>
                </div>
                <div class="entries">
                    <label>Match</label>
                    <input type="text" name="Match" placeholder="Enter Match Id" required>
                </div>
                <div class="entries">
                    <label>Score</label>
                    <input type="text" name="Score" placeholder="Enter Score" required>
                </div>
                <div class="entries">
                    <label>Result</label>
                    <input type="text" name="Result" placeholder="Enter Winner" required>
                </div>
                <button class="save_btn" type="submit" name="Save">Save</button>
            </form>
        </div>
    </div>
</body>

</html>