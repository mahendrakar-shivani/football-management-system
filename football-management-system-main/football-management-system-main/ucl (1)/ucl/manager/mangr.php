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
        <a href="../Refree/refree.php" class="links">
          <div>Refree</div>
        </a>
        <a href="./mangr.php" class="links">
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
            Manager Name
          </th>
          <th>
            Manager Id
          </th>
          <th>
            Team Id
          </th>
          <th>
            Action
          </th>
        </tr>
        <?php
        $res = $conn->query("select m_name,m_id,team_id from manager;");
        while ($row = $res->fetch_object()) {
          echo " 
            <tr>
            <td>
            " . $row->m_name . "
            </td>
            <td>
            " . $row->m_id . "
            </td>
            <td>
            " . $row->team_id . "
            </td>
            <td>
            <a class=\"edit\" href=\"m_edit.php?edit=$row->m_id\">Edit</a>
            <a class=\"delete\" href=\"m_create.php?delete=$row->m_id\">Delete</a>

            </td>
            </tr>";
        } ?>


      </table>
      <div><button class="new_btn"><a href="m_form.php">Add New Record</a></button></div>
    </div>
  </main>
</body>

</html>