<!DOCTYPE html>
<html>

    <?php 
        $headPageName = "Diorama | Contact";
        include ("includes/html_head.php");
    ?>

  <body class="menu">
    <div class="container" id="wrap">
        <div id="main">

          <?php
            $headerSelectedIdx = "contact";
            include ("includes/header.php");
          ?>


      <section class="section">
        <header class="section-head">Contact</header>
        <div class="section-desc">
          <h4>I'd love to hear your comments! Every last soul-sucking, depressing and stultifyingly ill-informed comment. Yes, every last one.</h4>
          <form id="form" method="post" action="includes/mail.php">
            <input  class="field" type="text"  placeholder="Your name"  autocomplete="off" required="required" name="fname" /> <br>
            <input  class="field" type="email" placeholder="Your email" autocomplete="off" required="required" name="email" /> <br>
            <textarea id="textarea" placeholder="Explode your brain on me here." required="required" name="message"></textarea>

            <input class="button" type="submit" value="Send" />
          </form>
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