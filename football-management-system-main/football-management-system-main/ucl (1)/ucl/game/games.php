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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
        <a href="./games.php" class="links">
          <div>Games</div>
        </a>
        <a href="../players/stats.php" class="links">
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
            Date
          </th>
          <th>
            Game ID
          </th>
          <th>
            Score
          </th>
          <th>
            Result
          </th>
          <th>
            Action
          </th>
        </tr>
        <?php
        $res = $conn->query("select date,game_id,score,result from game;");
        while ($row = $res->fetch_object()) {
          echo " 
        <tr>
        <td>
        " . $row->date . "
        </td>
        <td>
        " . $row->game_id . "
        </td>
        <td>
        " . $row->score . "
        </td>
        <td>
        " . $row->result . "
        </td>
        <td>
        <a class=\"edit\" href=\"em_edit.php?edit=$row->game_id\"><i style='font-size:24px' class='fas'>&#xf304;</i></a>
        <a class=\"delete\" href=\"process.php?delete=$row->game_id\"><i style='font-size:24px' class='fas'>&#xf2ed;</i></a>
        </td>
        </tr>";
        } ?>

      </table>
      <div><button class="new_btn"><a href="gm_form.php">Add New Record</a></button></div>
    </div>
  </main>
</body>

</html>