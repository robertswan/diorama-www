<?php
  session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location:admin.php");
  }
  else {
?>

<?php
  include_once "config.php";

  $result = mysqli_query($conn, "SELECT * FROM updates ORDER BY id DESC");
?>

<section class="section">

  <a href="add.htm">Add new Update</a> |
  <a href="logout.php">Logout</a><br><br>

  <table id="updates">
      <tr>
        <td>Title</td>
        <td>Date Created</td>
        <td>Update</td>
      </tr>
      <?php
        while($res = mysqli_fetch_array($result))
        {
          echo "<tr>";
            echo "<td>" . $res["title"]   . "</td>";
            echo "<td>" . $res["pubDate"] . "</td>";

            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> |";
            echo "<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
      ?>
  </table>
</section>

<?php } ?>
