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
            <header class="section-head">Recent Updates</header>
            <div class="section-desc">
                <ul>
                    <li></a><a href="devlogs/welcome-to-diorama.htm" class="text-link">One year's development!</a></li>
                    <li></a><a href="downloads.php" class="text-link">Version 0.44.0 available for download</a></li>
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

              Diorama is space themed blocky/voxel game. At it's heart is a game engine designed for Diorama's developer and users to create
              many single and multiplayer games for the next few years.<p>

              <h3>What you can do with it right now?</h3>
              <ul>
                <li>Play existing single player and multiplayer game modes:</li>
                <ul>
                  <li>Tiny Galaxy (SP)</li>
                  <li>Creative (SP + MP)</li>
                  <li>Plummet (MP)</li>
                  <li>Voxel Arena (MP)</li>
                </ul>
                <li>Explore infinitely tall, wide, strange and happy worlds</li>
                <li>Create and share new game modes using the <a href="https://www.lua.org/" class="text-link">programming language Lua</a></li>
                <li>Have fun!</li>
              </ul>

              <h3> What you can do with it in the future?</h3>
              <ul>
                <li>Add rotating and moving blocks to the world</li>
                <li>Add logic cubes for visual scripting</li>
                <li>Suffer from the weather, seasons and global catastrophes</li>
                <li>Build factory rooms to create blueprints</li>
                <li>Use blueprints to spawn mobs, vehicles or direct builders</li>
                <li>Have even more fun!</li>
              </ul>

              For more information <a href="faq.php" class="text-link">visit the FAQ</a>.

            </div>
          </section>
        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
