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

                About Diorama:
                <ul>
                    <li><a href="#whatis">What is Diorama?</a></li>
                    <li><a href="#minecraftclone">Isn't this just another Minecraft clone?</a></li>
                    <li><a href="#whatsets">What sets this apart from other voxel games?</a></li>
                    <li><a href="#futureplans">What are the future plans?</a></li>
                    <li><a href="#platformrequirements">What are the platform requirements?</a></li>
                    <li><a href="#canihost">Can I host a Diorama server?</a></li>
                    <li><a href="#reportbug">How can I report a bug?</a></li>
                    <li><a href="#votingrights">What are 'voting rights'?</a></li>
                </ul>
                Diorama and Money:
                <ul>
                    <li><a href="#costnow">How much does it cost to buy now?</a></li>
                    <li><a href="#costfuture">How much will it cost to buy in the future?</a></li>
                    <li><a href="#developmentcost">Can I contribute to the development cost?</a></li>
                </ul>
                Diorama Modding:
                <ul>
                    <li><a href="#whatmod">What can I mod?</a></li>
                    <li><a href="#howmod">How can I mod?</a></li>
                    <li><a href="#modhelp">Where can I get help modding?</a></li>
                    <li><a href="#gamemodedistribution">How can I make and distribute my own game mode?</a></li>
                    <li><a href="#sellmods">Can I make money from my mods / items / textures?</a></li>
                    <li><a href="#opensource">Will the engine be open source?</a></li>
                </ul>
                Streaming Rights:
                <ul>
                    <li><a href="#canistream">Can I stream or make videos of Diorama?</a></li>
                    <li><a href="#canimonetise">Can I make money off that content?</a></li>
                    <li><a href="#ccrequirements">Are there any requirements?</a></li>
                </ul>
                The Developer:
                <ul>
                    <li><a href="#whoyou">Who are you?</a></li>
                    <li><a href="#experience">What is your experience?</a></li>
                    <li><a href="#equipment">What do you use to develop?</a></li>
                    <li><a href="#howlearn">How should I learn to make games?</a></li>
                    <li><a href="#teazel">Who is Teazel?</a></li>
                </ul>
              </div>
            </section>

            <section class="section">
                <header class="section-head">About Diorama</header>
                <div class="section-desc">
                    <a name="whatis"></a><b>Q: What is Diorama?</b>
                    <p>
                        Diorama is a multiplatform voxel engine allowing players to play and create new content. 
                        Multiplayer already exists and it comes with several game modes.
                        The majority of the project is solely developed by Robert Swan.
                    <p>              
                    <a name="whatsets"></a><b>Q: What sets this apart from other voxel games?</b><br>
                    <p>
                        Currently:
                        <ul>
                            <li>The worlds are infinite in all 3 axes.</li>
                            <li>The game can already have new menus, mods, game modes and assets created.</li>
                            <li>Gravity that can be changed - per player - to up, down, north, east, south or west</li>
                            <li>A variety of terrain generation types:
                                <ul>
                                    <li>Regular (flat) terrain.</li>
                                    <li>Endless floating islands.</li>
                                    <li>Cube worlds.</li>
                                    <li>Hollow cube worlds.</li>
                                    <li>Back to back worlds.</li>
                                    <li>Parallel facing worlds.</li>
                                    <li>Doughnut worlds.</li>
                                    <li>Make your own!</li>
                                </ul>
                            </li>
                            <li>A unique rendering style.</li>
                            <li>A variety of prepackaged game modes.</li>
                            <li>Regular and rapid development <a href="http://twitch.tv/robtheswan">watchable here</a>.</li>
                        </ul>
                    <p>              
                    <a name="futureplans"></a><b>Q: What are the future plans?</b><br>
                    <p>
                        The future plans are deliberately open ended because of the planned 'voting rights' (<a href="#votingrights">see below</a>). However:
                        <ul>
                            <li>Time of day, weather and seasons.</li>
                            <li>Water and waves - both affected by gravity. Water could flow "uphill".</li>
                            <li>Logic cubes for visual programming and scripting.</li>
                            <li>Biomes. Really really impressive biomes.</li>
                            <li>Moving and rotating chunks.</li>
                            <li>Model importing.</li>
                            <li>Mobs, mounts, vehicles.</li>
                            <li>Factory rooms, to create and edit blueprints.</li>
                            <li>Blueprints to spawn custom models to place in the world.</li>
                            <li>An ever increasing draw distance.</li>
                            <li>Many many more game modes.</li>
                        </ul>
                        ...and eventually head towards the grand game plan with the elevator pitch of "Minecraft Vs Monster Hunter"!
                    <p>              
                    <a name="platformrequirements"></a><b>Q: What are the platform requirements?</b>
                    <p>
                        Diorama has <a href="downloads.php">downloads</a> for Windows (x86 x64), Mac (x86 x64) and Linux (x64). All machines must support at least opengl 3.3.
                    <p>              
                    <a name="canihost"></a><b>Q: Can I host a Diorama server?</b><br>
                    <p>
                        Yes. Every download comes with both a client and server executable. By default the server looks for a level to load in the saves\MyWorld folder. 
                        Use the client in single player mode to create this level if you don't know how to make one manually.
                    <p>              
                    <a name="reportbug"></a><b>Q: How can I report a bug?</b>
                        <p>
                        You can <a href="https://github.com/robertswan/diorama-game/issues">go here and create a new issue</a>. Details to include with a good bug report are: 
                        <ol>
                            <li>Version number of the game.</li>
                            <li>Operating system.</li>
                            <li>Graphics card(s).</li>
                            <li>Make of laptop / desktop.</li>
                            <li>Any errors printed in the log file from the logs/ directory.</li>
                            <li>Detailed reproduction steps for the bug.</li>
                            <li>How many attempts to reproduce the bug? How many were successful?</li>
                        </ol>
                    <p>              
                    <a name="votingrights"></a><b>Q: What are 'voting rights'?</b>
                    <p>
                        People who buy the game get the ability to vote in special polls at regular development intervals.
                        These polls will be curated by me but include player suggestions. 
                        They may be as small as "what shall we name this character?" 
                        or as big as "what engine feature shall I work on next?" or "what game mode shall I make?".
                        <p>
                        Because of this player direction I can't predict exactly what form the engine will finally take!
                    <p>
                </div>
            </section>

            <section class="section">
                <header class="section-head">Diorama and Money</header>
                <div class="section-desc">
                    <a name="costnow"></a><b>Q: How much does it cost to buy now?</b>
                    <p>
                        Nothing right now. <a href="downloads.php">Download it here!</a> However...
                    <p>  
                    <a name="costfuture"></a><b>Q: How much will it cost to buy in the future?</b>
                    <p>
                        ...a Kickstarter campaign will start very early 2017 where a minimum pledge of $15(ish) will get you a copy of Diorama and all future work and game modes for eternity. 
                        Every new sales platform such as Early Access and then full Steam release will subsequently get more expensive and not necessarily include all past and future content.
                        Post Kickstarter a login system will be created and you must have bought the game to download and play Diorama. I do not intend to join any bundles. 
                    <p>
                        Just before the Kickstarter campaign starts all the current <a href="https://www.patreon.com/diorama">Patreon pledge rewards</a> will get drastically downgraded.
                    <p>  
                    <a name="developmentcost"></a><b>Q: Can I contribute to the development cost?</b>
                    <p>
                        Yes please! You can:
                        <ul>
                            <li><a href="https://www.patreon.com/diorama">Become a Patreon</a>. Petreon supporters currently get the best deal ever. Check it out!</li>
                            <li><a href="https://twitch.streamlabs.com/robtheswan">Send me a Donation</a>!</li>
                        </ul>                                
                    <p>  
                </div>
            </section>

            <section class="section">
                <header class="section-head">Diorama and Modding</header>
                <div class="section-desc">
                    <a name="whatmod"></a><b>Q: What can I mod?</b>
                    <p>
                        The Lua scripts inside a game mode can access a growing engine API to change menus, blocks, terrain generation parameters, game modes, some game logic and entity behaviours.
                        Most other assets are also modifiable and are in an unencrypted state, such as textures and audio.
                    <p>              
                    <a name="howmod"></a><b>Q: How can I mod?</b>
                    <p>
                        All you need to edit the Lua scripting files is a regular text editor. I use <a href="https://www.sublimetext.com/">Sublime 2</a>.
                        Graphics assets are .png images. I use <a href="http://www.getpaint.net/index.html">Paint.Net</a>.
                        You will need a <a href="downloads.php">download of the game</a>, spare time and energy!
                    <p>              
                    <a name="modhelp"></a><b>Q: Where can I get help modding?</b>
                    <p>
                        The best place to ask is in the <a href="https://discord.gg/M8PPEfW">Diorama Official Discord</a> channel, or on <a href="http://twitch.tv/robtheswan">Twitch</a> while I'm streaming live.
                    <p>              
                    <a name="gamemodedistribution"></a><b>Q: How can I make and distribute my own game mode?</b>
                    <p>
                        Currently game modes are folders. Zipping one up and sending it to someone else should be enough for it to work.
                        Once people start work seriously on mods and new content the package and distribute mechanism will be on the agenda.
                    <p>              
                    <a name="sellmods"></a><b>Q: Can I make money from my mods / items / textures?</b>
                    <p>
                        In the future I'll examine the feasibility of game designers selling their game modes on a market place. 
                        One goal of Diorama is to encourage teams to make large scale games, and allowing financial rewards seems logical.
                    <p>              
                    <a name="opensource"></a><b>Q: Will the engine be open source?</b>
                    <p>
                        Very unlikely. Certainly not in the near future.
                    <p>              
                </div>
            </section>

            <section class="section">
                <header class="section-head">Streaming Rights</header>
                <div class="section-desc">
                    <a name="canistream"></a><b>Q: Can I stream or make videos of Diorama?</b>
                    <p>
                        Yes. I'd love you to.
                    <p>              
                    <a name="canimonetise"></a><b>Q: Can I make money off that content?</b>
                    <p>
                        Yes (for now). I give that caveat answer because I'm not a lawyer and have no idea what may / may not occur in the future. I have no intention of changing this but figured I'd better cover my back!
                    <p>              
                    <a name="ccrequirements"></a><b>Q: Are there any content creation requirements?</b>
                    <p>
                        No. I would appreciate it if you <a href="http://diorama.game">linked back to the website</a> though!
                    <p>              
                </div>
            </section>

            <section class="section">
                <header class="section-head">About The Developer</header>
                <div class="section-desc">
                    <a name="whoyou"></a><b>Q: Who are you?</b>
                    <p>
                        I'm a games programmer with 20 years in "the industry". I'm working on Diorama until such time I can determine if it can support me fulltime for the next few years. I'm quietly confident.
                    <p>              
                    <a name="experience"></a><b>Q: What is your experience?</b>
                    <p>
                        I've developed games and engines on the following platforms:
                        <ul>
                            <li>Net Yaroze (!), PS1, PS2 and PSP.</li>
                            <li>GBA, DS, and Wii.</li>
                            <li>Xbox 360.</li>
                            <li>PC.</li>
                            <li>Android, iOS, Flash and Html5.</li>
                        </ul>
                        I've also been a lead programmer for the past 12 years hiring, firing, mentoring and generally harassing staff while trying to deliver good quality software. Sometimes I've even succeeded!
                    <p>              
                    <a name="equipment"></a><b>Q: What is your development set up?</b>
                    <p>
                        For PC hardware <a href="http://pastebin.com/4bjMZGnE">look here</a>.
                        My environment also includes a Blue Yeti microphone, Corsair Strafe RGB MX Silent, 2 x Logitech c920 webcams, 4 x monitors and a cushion for the cat. And a very long desk.
                    <p>              
                    <a name="howlearn"></a><b>Q: How can I learn to make games?</b>
                    <p>
                        This question gets asked a lot on Twitch. I used to give long answers but in terms of technology and languages there isn't one answer for everyone. It depends on commitment, ability, prior knowledge and motivation.
                        So instead now I ask new programmers to make sure whatever they choose is fun for them; if it's not fun then you won't stick at it. I think using an engine such as Gamemaker or Unity is a great start as they give quick rewards. 
                        I also definitely don't recommend someone starts with C or C++. And if something you try isn't fun then simply drop it and try something else. Progress is key and most programming
                        concepts are language agnostic. Just be happy playing with logic!
                    <p>              
                    <a name="teazel"></a><b>Q: Who is Teazel?</b>
                    <p>
                        Teazel is my cat. She is small, black, vocal and very very adorable. She also only has 3 legs. She is a regular (sleeping) star on <a href="https://www.twitch.tv/robtheswan/videos/highlights">my Twitch channel</a>.
                    <p>
                </div>
            </section>
        </div>
    </div>

    <div id="sticky-footer">
      <?php include ("includes/footer.php");?>
    </div>
  </body>
</html>
