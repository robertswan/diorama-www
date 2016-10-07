<?php

    function getHeaderClass ($idx)
    {
        global $headerSelectedIdx;
        echo ($idx == $headerSelectedIdx) ? "\"link active\"" : "\"link\"";
    }

?>


<header id="main-header">
  <div class="three columns">
    <a href="index.php">
      <div id="logo"></div>
    </a>
  </div>

  <!-- Twitch live status -->
  <div class="live-status">
    <a href="https://twitch.tv/robtheswan" target="_blank">
      <img src="imgs/twitch-icon-transparant.png" alt="" />
      <div id="live-status-text">i'm currently live! Join us</div>
      <div id="live-status-count">18 viewers</div>
    </a>
  </div>

  <div id="nav-wrap">
    <nav id="nav">
        <a href="index.php"><li             class=<?php getHeaderClass("home");?>>Home</li></a>
        <a href="index.php#download"><li    class=<?php getHeaderClass("download");?>>Download</li></a>
        <a href="faq.php"><li               class=<?php getHeaderClass("faq");?>>FAQ</li></a>
        <a href="devlog.php"><li            class=<?php getHeaderClass("devlog");?>>Devlog</li></a>
        <a href="media.php"><li             class=<?php getHeaderClass("media");?>>Media &amp; Press</li></a>
        <a href="contact.php"><li           class=<?php getHeaderClass("contact");?>>Contact</li></a>
    </nav>
  </div>

  <div id="nav-mobile">
    <a href="#" class="menu_toggle">
      <img id="menuImg" src="imgs/menu.png" data-swap="imgs/close.png">
    </a>
  </div>

  <div class="menu_slide">
    <h2 class="mobile-header">Menu</h2>
    <nav>
      <a href="index.htm"><li class="mobile-link">Home</li></a>
      <!--<a href="#"><li class="buy">Store</li></a>-->
      <a href="#"><li class="mobile-link">Media</li></a>
      <a href="http://robtheswan.com/wiki/index.php?title=Main_Page" target="_blank" title="Opens a new tab"><li class="mobile-link">Wiki</li></a>
      <a href="contact.htm"><li class="mobile-link">Contact</li></a>
      <a href="faq.htm"><li class="mobile-link">FAQ</li></a>
    </nav>
  </div>
</header>
