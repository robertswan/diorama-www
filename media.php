<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diorama | Media &amp; Press</title>

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

    <!--Lightbox-->
    <link rel="stylesheet" href="css/lightbox.min.css">

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
        $headerSelectedIdx = "media";
        include ("includes/header.php");
      ?>

      <section class="section">
        <header class="section-head">Screenshots</header>

        <div class="section-desc">
            <a href="imgs/gallery/test_00.png" data-lightbox="example-set" data-title="caption 1"><img src="imgs/gallery/thumbnails/test_00_thumb.png" alt="image-1"/></a>
            <a href="imgs/gallery/test_01.png" data-lightbox="example-set" data-title="caption 2"><img src="imgs/gallery/thumbnails/test_01_thumb.png" alt="image-1"/></a>
        </div>
      </section>

      <?php
        include ("includes/footer.php");
      ?>
    </div>

    <!--JQuery-->
    <script src="js/jquery.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <script>
        lightbox.option({
          'disableScrolling': true
        })
    </script>
  </body>
</html>
