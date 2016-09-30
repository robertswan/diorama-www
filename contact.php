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
          <h4>Newsletter</h4>
          Sign up to the weekly newsletter for Diorama updates and many interesting things that I can't yet quite imagine.
          <p>
          <div class="indicates-required"><span class="asterisk">*</span> indicates a required field.</div>
          <p>
        <form id="form-newsletter" class="myform" action="//game.us14.list-manage.com/subscribe/post?u=be48b16c3f53964033e8ea16d&amp;id=8baa1d2c98" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/Diorama', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
            <input class="field" type="text" name="EMAIL" placeholder="Your email *"/>
            <input class="field" type="text" name="FNAME" placeholder="Your first name"/>
            <input class="field" type="text" name="LNAME" placeholder="Your last name"/>
            <p>
            <input class="button" type="submit" value="Subscribe" />
            <input type="hidden" value="1" name="embed"/>
        </form>
        </div> 

        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>       
        
        <div class="section-desc">
          <h4>Message</h4>
          ...OR I'd love to hear your comments! Every last soul-sucking, depressing and stultifyingly ill-informed comment. Yes, every last one.
          <p>
          <div class="indicates-required"><span class="asterisk">*</span> indicates a required field.</div>
          <p>
          <form id="form-email" class="myform" method="post" action="includes/mail.php">
            <input  class="field" type="email" placeholder="Your email *" autocomplete="off" required="required" name="email"/><br>
            <input  class="field" type="text"  placeholder="Your name"  autocomplete="off" required="required" name="fname"/><br>
            <textarea id="textarea" placeholder="Explode your brain on me here." required="required" name="message"></textarea>
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
