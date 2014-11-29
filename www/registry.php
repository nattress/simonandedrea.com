<?php
include 'site-common.php';
write_html_header();
?>

<span class="sans-serif-font">
    <div id="subpage-header-image" class="header-image-background-color">
        <a href="index.php"><img src="images/header_sm.png" class="center"/></a>
    </div>
    <?php draw_navigation_menu(); ?>
</span>

<div id="fixed-width-container">
    
    <div id="registrylinks" style="width: 520px; margin-left: auto; margin-right: auto; margin-top: 45px;">
        <div class="registry-store">
            <a href="http://www.crateandbarrel.com/Gift-Registry/Simon-Nattress-and-Edrea-Lita/r5166386">
                <img src="images/crateandbarrel.png" style="width: 245px"/>
            </a>
        </div>

        <div class="registry-store" style="margin-left: 30px; margin-top: 7px">
            <a href="http://www.amazon.com/registry/wedding/3JMRVVDWG8N8F">
                <img src="images/amazon.jpg" style="width: 245px"/>
            </a>
        </div>

        <div class="registry-store" style="margin-left: 30px; margin-top: 7px">
            <a href="https://secure.westelm.com/registry/2gl9p7qq8h/registry-list.html?cm_Type=gnav">
                <img src="images/westelm.jpg" style="width: 245px"/>
            </a>
        </div>
    </div>
    
</div>
<?php write_html_footer(); ?>