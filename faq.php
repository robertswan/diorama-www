<!DOCTYPE html>
<html>

    <?php 
        $headPageName = "Diorama | FAQ";
        include ("includes/html_head.php");
    ?>

  <body class="menu">
    <div class="container" id="wrap">
        <div id="main">

          <?php
            $headerSelectedIdx = "faq";
            include ("includes/header.php");
          ?>

          <section class="section">
            <header class="section-head">Frequently Asked Questions</header>
            <div class="section-desc">
              <h3>Here are some questions that are frequently asked. They have answers too...</h3>

              <b>Q: When did you start making Diorama?</b> <br>
              It's been in development since October 2015

              <br><br>

              <b>Q: What is the game written in?</b> <br>
              It's written in C++, using Raknet, OpenGL, GLM, zLib, GLFW etc...

              <br><br>

              <b>Q: What do you do for a living?</b> <br>
              "Currently" making this game is my full time job

              <br><br>

              <b>Q: How much experience do you have making games?</b> <br>
              I've had games and engines relased on PS1/PS2/Wii/GBA/Xbox/Android/iOS and HTML5

              <br><br>

              <b>Q: What competitions have you entered?</b> <br>
              I've entered a few Ludum Dare Competitions and a few Game Jams with decent outcomes

              <br><br>

              <b>Q: What other languages have coded in?</b> <br>
              I've coded in C, C++, C#, Lua, Python, Assembly, Actionscript(Flash), JS etc...

              <br><br>
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
