<?php

    function getPageName ()
    {
        global $headPageName;
        echo $headPageName;
    }

    function getAdditionalStyleSheets ()
    {
        global $headAdditionalStyleSheets;
        $styles_count = count ($headAdditionalStyleSheets);
        for ($idx = 0; $idx < $styles_count; $idx++)
        {
             echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $headAdditionalStyleSheets [$idx] . "\">";
        }
    }

?>

  <head>
    <meta charset="utf-8">
    <title><?php getPageName();?></title>

    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--SEO-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico" />

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/master.css">

    <?php getAdditionalStyleSheets();?>

    <!--[if !IE 7]>
        <style type="text/css">
            #wrap {display:table;height:100%}
        </style>
    <![endif]-->

  </head>

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->

<!--
  <script type="text/javascript">
      window.cookieconsent_options = {"message":"This website uses cookies to give you a better experience","dismiss":"Okay","learnMore":null,"link":null,"theme":"light-top"};
  </script>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
-->

  <!-- End Cookie Consent plugin -->
