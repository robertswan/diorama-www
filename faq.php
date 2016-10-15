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
            $headerSelectedIdx = "faq";
            include ("includes/header.php");
          ?>

          <section class="section">
            <header class="section-head">Frequently Asked Questions</header>
            <div class="section-desc">

                About the Developer:
                <ul>
                    <li><a href="#whenstart">When did you start making Diorama?</a></li>
                    <li><a href="#whatwritten">What is the game written in?</a></li>
                    <li><a href="#whatliving">What do you do for a living?</a></li>
                    <li><a href="#whatlanguages">What other languages have coded in?</a></li>
                </ul>

                About the Developer:
                <ul>
                    <li><a href="#whenstart">When did you start making Diorama?</a></li>
                    <li><a href="#whatwritten">What is the game written in?</a></li>
                    <li><a href="#whatliving">What do you do for a living?</a></li>
                    <li><a href="#whatlanguages">What other languages have coded in?</a></li>
                </ul>
            </div>
            </section>

          <section class="section">
            <header class="section-head">About The Developer</header>
            <div class="section-desc">

                <a name="whenstart"></a>
              <b>Q: When did you start making Diorama?</b> <br>
              It's been in development since October 2015
                <p>              

<a name="whatwritten"></a>
              <b>Q: What is the game written in?</b> <br>
              It's written in C++, using Raknet, OpenGL, GLM, zLib, GLFW etc...
              <p>

<a name="whatliving"></a>
              <b>Q: What do you do for a living?</b> <br>
              "Currently" making this game is my full time job
              <p>

              <b>Q: How much experience do you have making games?</b> <br>
              I've had games and engines relased on PS1/PS2/Wii/GBA/Xbox/Android/iOS and HTML5
              <p>

              <b>Q: What competitions have you entered?</b> <br>
              I've entered a few Ludum Dare Competitions and a few Game Jams with decent outcomes
              <p>

<a name="whatlanguages"></a>
              <b>Q: What other languages have coded in?</b> <br>
              I've coded in C, C++, C#, Lua, Python, Assembly, Actionscript(Flash), JS etc...
            </div>
          </section>
        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
