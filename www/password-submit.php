<?php
include 'site-common.php';
write_html_header(); ?>

<?php

if ($_POST['pwd']==$SITE_PASSWORD || $_POST['pwd']==$SITE_PASSWORD2)
{
    $_SESSION['accessgranted'] = 1;
    write_redirect('index.php');
}
else
{
    $failed = true;
    include 'password-entry.php';
}

write_html_footer();
?>