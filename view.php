<?php
  include_once "backend/config.php";

  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM updates WHERE id=$id");

  while($res = mysqli_fetch_array($result))
  {
    $title = $res["title"];
    $summary = $res["summary"];
    $content = $res["content"];
    $pubDate = $res["pubDate"];
  }
?>

<!DOCTYPE html>
<html>
  <?php
    $headPageName = "Diorama | View Article";
    include ("includes/html_head.php");
  ?>

  <body class="menu">
    <div class="container" id="wrap">
      <div id="main">

        <?php
          $headerSelectedIdx = "devlog";
          include ("includes/header.php");
        ?>


        <section class="section">
          <header class="section-head"><?php echo $title ."<small style=color:yellow;>" . " [ Published " . date('d M y', strtotime($pubDate)) . " ]</small>"; ?></header>
          <div class="section-desc">
            <?php echo $summary ?>

            <br><br>

            <?php
              echo htmlspecialchars($content);
            ?>

            <a href="index.php">Back</a>
          </div>
        </section>
      </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
