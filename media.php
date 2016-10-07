<!DOCTYPE html>
<html>

    <?php 
        $headAdditionalStyleSheets = array ("css/lightbox.min.css");
        $headPageName = "Diorama | Media";
        include ("includes/html_head.php");
    ?>

    <body class="menu">
        <div class="container" id="wrap">
            <div id="main">

                <?php
                    $headerSelectedIdx = "media";
                    include ("includes/header.php");
                ?>

                <section class="section">
                    <header class="section-head">Screenshots</header>
                    <div class="section-desc">
                        <a href="imgs/gallery/test_00.png" data-lightbox="example-set" data-title="caption 1"><img src="imgs/gallery/thumbnails/test_00_thumb.png" alt="image-1"/></a>
                        <a href="imgs/gallery/test_01.png" data-lightbox="example-set" data-title="caption 2"><img src="imgs/gallery/thumbnails/test_01_thumb.png" alt="image-1"/></a>
                    </div>
                </section>
            </div>
        </div>

        <div id="sticky-footer">
            <?php include ("includes/footer.php");?>
        </div>

        <script>
            lightbox.option({
                'disableScrolling': true
            })
        </script>
    </body>
</html>
