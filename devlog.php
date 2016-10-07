<!DOCTYPE html>
<html>

    <?php 
        $headPageName = "Diorama | Devlog";
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
        <header class="section-head">Devlogs</header>
        <div class="section-desc">
            <a href="devlogs/weekly-update-02.htm" class="text-link">Weekly Development Update 2.</a> 29-09-2016
            <p>Here is some waffley overview of this article. To entice and dupe people into reading it.
            <p>
            <a href="devlogs/weekly-update-01.htm" class="text-link">Weekly Development Update 1.</a> 29-09-2016
            <p>Here is some waffley overview of this article. To entice and dupe people into reading it.
            <p>
            <a href="devlogs/welcome-to-your-doom.htm" class="text-link">Welcome to your doom.</a> 29-09-2016
            <p>Here is some waffley overview of this article. To entice and dupe people into reading it.
        </div>
      </section>

    </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>

    <!--JQuery-->
    <script src="js/jquery.min.js"></script>

    <!--Custom Scripts-->
    <script src="js/switchmenu.js"></script>
  </body>
</html>
