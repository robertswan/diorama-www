<?php

    function getHeaderClass ($idx)
    {
        global $headerSelectedIdx;
        echo ($idx == $headerSelectedIdx) ? "\"link active\"" : "\"link\"";
    }

?>


<header id="main-header">
  <div id="header-logo">
    <a href="index.php">
      <div id="logo"></div>
    </a>
  </div>

    <div id="twitch-status"><iframe src="http://streambadge.com/twitch/custom/ffffff/000000/5D94B2/robtheswan/" style="border:none;height:64px;width:100%"></iframe></div>
    <!-- <div id="twitch-status"><iframe src="http://streambadge.com/twitch/robtheswan/" style="border:none;width:100%"></iframe></div> -->

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
    <h2>Menu</h2>
    <nav>
      <a href="index.php"><li class="mobile-link">Home</li></a>
      <a href="index.php#download"><li class="mobile-link">Download</li></a>
      <a href="faq.php"><li class="mobile-link">FAQ</li></a>
      <a href="devlog.php"><li class="mobile-link">Devlog</li></a>
      <a href="media.php"><li class="mobile-link">Media &amp; Press</li></a>
      <a href="contact.php"><li class="mobile-link">Contact</li></a>
    </nav>
  </div>
</header>
