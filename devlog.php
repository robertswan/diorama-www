<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diorama | Devlog</title>

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
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

    <!--CSS-->
    <script src="js/sweetalert.min.js"></script>
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
