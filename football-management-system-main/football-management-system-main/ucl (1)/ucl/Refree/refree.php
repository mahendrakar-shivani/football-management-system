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
  <main>
    <nav class="navbar">
      <div class="img_div">
      </div>
      <div class="ls_div">
        <a href="../index.php" class="links">
          <div>Home</div>
        </a>
        <a href="../teams/team.php" class="links">
          <div>Teams</div>
        </a>
        <a href="../game/games.php" class="links">
          <div>Games</div>
        </a>
        <a href="../players/stats.php" class="links">
          <div>Stats</div>
        </a>
        <a href="./refree.php" class="links">
          <div>Refree</div>
        </a>
        <a href="../manager/mangr.php" class="links">
          <div>Manager</div>
        </a>
        <a href="../stadium/stad.php" class="links">
          <div>Stadium's</div>
        </a>
      </div>
    </nav>
    <div class="container">
      <table>
        <tr>
          <th>
            Refree Name
          </th>
          <th>
            Refree ID
          </th>
          <th>
            Game ID
          </th>
          <th>
            Action
          </th>
        </tr>
        <?php
        $res = $conn->query("select r_name,r_id,game_id from referee;");
        while ($row = $res->fetch_object()) {
          echo " 
        <tr>
        <td>
        " . $row->r_name . "
        </td>
        <td>
        " . $row->r_id . "
        </td>
        <td>
        " . $row->game_id . "
        </td>
        <td>
        <a class=\"edit\" href=\"ref_edit.php?edit=$row->r_id\">Edit</a>
        <a class=\"delete\" href=\"ref_create.php?delete=$row->r_id\">Delete</a>
        </td>
        </tr>";
        } ?>

      </table>
      <div><button class="new_btn"><a href="ref_form.php">Add New Record</a></button></div>
    </div>
  </main>
</body>

</html>