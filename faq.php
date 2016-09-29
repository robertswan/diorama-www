<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diorama | FAQ</title>

    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--SEO-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico" />

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/master.css">
  </head>

  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<!--
  <script type="text/javascript">
      window.cookieconsent_options = {"message":"This website uses cookies to give you a better experience","dismiss":"Okay","learnMore":null,"link":null,"theme":"light-top"};
  </script>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
-->
  <!-- End Cookie Consent plugin -->

  <body class="menu">
    <div class="container">
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

      <?php
        include ("includes/footer.php");
      ?>
    </div>

    <!--JQuery-->
    <script src="js/jquery.min.js"></script>

    <!--Custom Scripts-->
    <script src="js/switchmenu.js"></script>
  </body>
</html>
