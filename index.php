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
              <div id="slider">
                <a href="#" class="ctrl_next">></a>
                <a href="#" class="ctrl_prev"><</a>

                <ul>
                  <li>SLIDE 1</li>
                  <li>SLIDE 2</li>
                  <li>SLIDE 3</li>
                  <li>SLIDE 4</li>
                </ul>
              </div>
            </section>

            <section class="section">
              <header class="section-head">Recent Updates</header>
              <div class="section-desc">
                <a href="downloads.php" class="text-link">Version 0.46.0 available for download</a>
              </div>
            </section>

          <section class="section">
            <header class="section-head">Devlog</header>
            <div class="section-desc">
              <?php
                include_once "backend/config.php";
                $result = mysqli_query($conn, "SELECT * FROM updates ORDER BY id DESC");


                while($res = mysqli_fetch_array($result))
                {
                    echo "<a href='view.php?id=$res[id]'>" . $res["title"] . "</a>";
                    echo "<small>" . "  "  . date("d M Y", strtotime($res["pubDate"])) . " </small>";
                }
              ?>
            </div>
          </section>

          <section class="section">
            <header class="section-head">About</header>
            <div class="section-desc">

              Diorama is a space themed blocky/voxel game. At it's core is a game engine designed for all players to create and share
              many single and multiplayer games for years to come. My intention is to make my own large games using it.<p>

              <h3>What you can do with it right now?</h3>
              <ul>
                <li>Play a variety of included game modes in single player and multiplayer.</li>
                <li>Explore infinitely tall, wide, strange and happy worlds.</li>
                <li>Create and share new game modes using the <a href="https://www.lua.org/" class="text-link">programming language Lua</a>.</li>
                <li><a href="https://github.com/robertswan/diorama-game">Read and contribute</a> to the existing game modes.</li>
                <li>Have fun!</li>
              </ul>

              <h3> What you can do with it in the future?</h3>
              <ul>
                <li>Add rotating and moving blocks to the world.</li>
                <li>Add logic cubes for visual scripting.</li>
                <li>Suffer from the weather, seasons and global catastrophes.</li>
                <li>Build factory rooms to create blueprints.</li>
                <li>Use blueprints to spawn mobs, vehicles or direct builders.</li>
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
    <script src="js/slider.js"></script>
  </body>
</html>
