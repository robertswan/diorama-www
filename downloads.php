<!DOCTYPE html>
<html>

    <?php 
        $headPageName = "Diorama | Downloads";
        include ("includes/html_head.php");
    ?>

  <body>
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
              <h3>Version Number: 0.46.0. Released 16-10-2016</h3>

              <div class="platform">
                <header id="win-head" class="platform-header"></header>
                <div class="platform-desc">WINDOWS</div>
                <a href="http://bit.ly/2r09q3H" class="d-link">
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
                <h3 class="fullwidth">Notes</h3>
                <ul>
                    <li>The Windows version requires the "VS2015 C++ Redist". If it is not already installed <a href="http://bit.ly/1L8Hksj">you can get it here</a>.</li>
                    <li>The Mac OS X version currently requires running from the command line, with admin privileges.</li>
                    <li>The Linux version may require installing freeglut3. The following code installs it: <br><code>sudo apt-get install freeglut3 && sudo apt-get install freeglut3-dev</code><br>
                </ul>
          </section>

        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
