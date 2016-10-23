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
            There's several ways to get in touch and I'd love to hear from you:
            <ul>
                <li>Twitter: <a href="http://twitter.com/robtheswandev">twitter.com/robtheswandev</a>.</li>
                <li>Twitch: <a href="http://twitch.tv/robtheswan">twitch.tv/robtheswan</a>.</li>
                <li>Mail: <a href="mailto:contact@diorama.game?Subject=Hello%20again">contact@diorama.game</a>.</li>
                <li>Discord: <a href="https://discord.gg/M8PPEfW">Diorama Official server</a>.</li>
            </ul>
            It really is that simple. I dare you.
            
        </div>
      </section>

    </div>

    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
