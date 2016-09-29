<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diorama | Contact</title>

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
        $headerSelectedIdx = "contact";
        include ("includes/header.php");
      ?>

      <section class="section">
        <header class="section-head">Contact</header>
        <div class="section-desc">
          <h4>I'd love to hear your comments! Every last soul-sucking, depressing and stultifyingly ill-informed comment. Yes, every last one.</h4>
          <form id="form">
            <input  class="field" type="text"  placeholder="Your name"  autocomplete="off" required="required" /> <br>
            <input  class="field" type="email" placeholder="Your email" autocomplete="off" required="required" /> <br>
            <textarea id="textarea" placeholder="Explode your brain on me here." required="required"></textarea>

            <input class="button" type="submit" value="Send" />
          </form>
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
