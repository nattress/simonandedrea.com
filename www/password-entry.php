<?php
$BGCOLOR="E9E5D8";
write_html_header();
?>
    <style>
        body {background-color: #E9E5D8;}
    </style>

    <div class="header-image-background-color">
        <div id="subpage-header-image" style="padding-top: 70px;">
            <img src="images/welcome.png" class="center"/>
        </div>

        <div id="wedding-date-entry">
            <form id="password-entry-form" name="input" action="password-submit.php" method="post">
                <span class="serif-font grey" style="font-weight: 700; margin-right: 15px">
                    PLEASE ENTER OUR WEDDING DATE
                </span>

                <span class="sans-serif-font">
                    <input class="grey" type="input" name="pwd" placeholder="DDMMYYYY" style="border: none; text-align: center; padding-top: 7px; padding-bottom: 7px">
                    <input type="submit" value="ENTER" style="border: none; background-color: #2E77D9; color: white; padding-top: 7px; padding-bottom: 7px; padding-left: 25px; padding-right: 25px">
                </span>
        </form>

        <?php
            if ($failed == true)
            {
                echo '<div style="margin-top: 20px; font-weight: 500;" class="sans-serif-font" id="incorrect-password">That\'s not our wedding date!</div>';
            }
        ?>
        </div>
    </div>
<?php
write_html_footer();
// Bail so we don't render the main site to an un-authenticated visitor
exit(0);
?>