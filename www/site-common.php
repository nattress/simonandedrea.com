<?php

session_start();

include 'config.php';
include 'password-protection.php';
include 'navigation-menu.php';

function write_html_header()
{
    ?>
<!doctype html>
<html>
    <head>
        <title>Simon and Edrea</title>
        <script type="text/javascript" src="//use.typekit.net/guj4khk.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <link href="styles/wedding.css" rel="stylesheet" />
    </head>
    <body>
    <?php
}

function write_html_footer()
{
    ?>
    </body>
</html>
    <?php
}

function write_redirect($url)
{
    ?>
<script language="javascript" type="text/javascript">
<!--
window.location="<?=$url?>";
// -->
</script>
    <?php
}
?>