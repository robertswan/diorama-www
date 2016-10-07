<!DOCTYPE html>
<html>

    <?php 
        $headPageName = "Diorama | Home";
        include ("includes/html_head.php");
    ?>

  <body class="menu">
    <div class="container" id="wrap">
        <div id="main">

          <?php
            $headerSelectedIdx = "home";
            include ("includes/header.php");
          ?>

            <section class="section">
                <div id="trailer">
                    <!-- <iframe width="100%" height="600px" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/qEYOyZVWlzs?list=PLzPGxMkpbClUgWjg7QiV5dqeCTQh8M-6t"></iframe> -->
                    <!--<img id="trailer-img" src="" width="100%"></img>-->
                </div>
            </section>


          <section class="section">
            <a name="download"/>
            <header class="section-head">
              Download
            </header>
            <div class="section-desc">
              Version Number: 0.44.0. <a href="release-notes.htm" class="text-link">Release Notes</a><p>


              <div class="platform">
                <header id="win-head" class="platform-header"></header>
                <div class="platform-desc">
                  WINDOWS
                </div>

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
                  <div class="platform-desc">
                    MAC OS X
                  </div>

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
                    <div class="platform-desc">
                    LINUX
                  </div>

                  <a href="http://bit.ly/1rdvJja">
                    <div id="bit86" class="arrow" title="Download Linux 64 bit">
                      <span class="dtext">x64</span>
                    </div>
                  </a>
                </div>
          </section>

          <section class="section">
            <header class="section-head">Devlog</header>
            <div class="section-desc">
                <ul>
                    <li></a><a href="devlogs/weekly-update-02.htm" class="text-link">Weekly Development Update 2.</a> 29-09-2016</li>
                    <li></a><a href="devlogs/weekly-update-01.htm" class="text-link">Weekly Development Update 1.</a> 29-09-2016</li>
                    <li></a><a href="devlogs/welcome-to-your-doom.htm" class="text-link">Welcome to your doom.</a> 29-09-2016</li>
                </ul>
            </div>
          </section>

          <section class="section">
            <header class="section-head">About</header>
            <div class="section-desc">
              <!--Diorama: The Infinite Survival Crafting Game With Space Ships, Naval Combat and the Best Mod Support of Any Game Ever*** <br>
              <small>*water maybe included depending on the day</small><br>
              <small>**gameplay not included</small><br>
              <small>***voxels sold separately in upcoming DLC</small>

              <br><br>

              "It's very unlikely you will ever see water" - RobTheSwan 2016 <small>(It was really Blackbod that said this but who's keeping track)</small> <br>

              "The infinite landscape is so procedurally large that the likelihood of seeing other players, water or gameplay is limited"
              - RobTheSwan 2016<br>-->

              It is currently a blockly/voxel game. Its currently named Diorama and
              at the moment it looks like something you would see from early Minecraft.<p>

              As development continues it will stand apart from other voxel games, as of yet
              it is too early to show these differences.<p>

              Nothing is set in stone as of yet, feel free to pop over to the live development
              and suggest some ideas. Good suggestions are always welcome.<p>

              <h3>What you can do with it right now?</h3>
              <ul>
                <li>Create new Game Modes using Lua</li>
                <li>Play existing Singleplayer and Multiplayer Game Modes</li>
                <ul>
                  <li>Creative</li>
                  <li>Plummet</li>
                  <li>Voxel Arena</li>
                  <li>Tiny Galaxy</li>
                </ul>
                <li>Share creations with others</li>
                <li>Explore Infinitely tall, wide and happy worlds</li>
                <li>Marvel at Cubic, Mirror, Floating Islands, and other World Types</li>
                <li>Users can edit and override existing Game Modes and Assets</li>
                <li>Package players own Game Modes and Assets</li>
              </ul>

              <h3> What you can do with it in the future?</h3>
              <ul>
                <li>Vote for new Features</li>
                <li>Enter Build / Designs competitions and win prizes</li>
                <li>Suffer from the weather, seasons and global catastrophes</li>
                <li>Add rotating and moving blocks to the world</li>
                <li>Add logic cubes for visual scripting</li>
                <li>Create Factory rooms that create blueprints</li>
                <li>Use blueprints to spawn mobs, vehicles or direct builders</li>
              </ul>
            </div>
          </section>
        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>

    <!--JQuery-->
    <script src="js/jquery.min.js"></script>

    <!--Custom Scripts-->
    <script src="js/switchmenu.js"></script>

  </body>
</html>
