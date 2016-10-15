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
            $headerSelectedIdx = "downloads";
            include ("includes/header.php");
          ?>

          <section class="section">
            <a name="download"/>
            <header class="section-head">
              Latest Downloads
            </header>
            <div class="section-desc">
              Version Number: 0.44.0. Released 29-09-2016<p>


              <div class="platform">
                <header id="win-head" class="platform-header"></header>
                <div class="platform-desc">WINDOWS</div>
                <a href="http://bit.ly/1SFQIUQ" class="d-link">
                  <div id="bit86" class="arrow" title="Download Windows 64 bit">
                    <span class="dtext">x64</span>
                  </div>
                </a>

                <a href="http://bit.ly/1T9UBii" class="d-link">
                  <div class="arrow" title="Download Windows 32 bit">
                    <span class="dtext">x86</span>
                  </div>
                </a>
              </div>

              <div class="platform">
                <header id="mac-head" class="platform-header"></header>
                  <div class="platform-desc">MAC OS X</div>

                  <a href="http://bit.ly/1NMBUzp">
                    <div id="bit86" class="arrow" title="Download MacOS X 64 bit">
                      <span class="dtext">x64</span>
                    </div>
                  </a>

                  <a href="http://bit.ly/1UdaGZp">
                    <div class="arrow" title="Download MacOS X 32 bit">
                      <span class="dtext">x86</span>
                    </div>
                  </a>
                </div>

                <div class="platform">
                  <header id="linux-head" class="platform-header"></header>
                    <div class="platform-desc">LINUX</div>

                  <a href="http://bit.ly/1rdvJja">
                    <div id="bit86" class="arrow" title="Download Linux 64 bit">
                      <span class="dtext">x64</span>
                    </div>
                  </a>
                </div>
          </section>

        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
