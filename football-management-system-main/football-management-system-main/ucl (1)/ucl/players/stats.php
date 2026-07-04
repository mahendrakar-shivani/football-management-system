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
        <a href="./stats.php" class="links">
          <div>Stats</div>
        </a>
        <a href="../Refree/refree.php" class="links">
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
            Player Name
          </th>
          <th>
            Team
          </th>
          <th>
            Goals
          </th>
          <th>
            Assists
          </th>
          <th>
            Action
          </th>
        </tr>
        <?php
        $res = $conn->query("select * from players where goals != 0 or assists != 0 order by goals desc,assists desc;");
        while ($row = $res->fetch_object()) {
          echo " 
        <tr>
        <td>
        " . $row->p_name . "
        </td>
        <td>
        " . $row->team_id . "
        </td>
        <td>
        " . $row->goals . "
        </td>
        <td>
        " . $row->assists . "
        </td>
        <td>
        <a class=\"edit\" href=\"stat_edit.php?edit=$row->p_id\">Edit</a>
        <a class=\"delete\" href=\"stat_create.php?delete=$row->p_id\">Delete</a>

        </td>
        </tr>";
        } ?>

      </table>
      <div><button class="new_btn"><a href="pl_form.php">Add New Record</a></button></div>

    </div>
  </main>
</body>

</html>