<?php

function draw_navigation_menu()
{
    global $MENU_PAGES;
    global $CURRENT_PAGE;
    ?>
    <div id="navigation-menu">
        <ul>
        <?php
        foreach ($MENU_PAGES as $title => $url) {
            if ($url == $CURRENT_PAGE)
            {
                echo '        <li class="menu-selected">' . $title . '</li>';
            }
            else
            {
                
                echo '        <li><a href="' . $url . '">' . $title . '</a></li>';
            }
        }
        ?>
        </ul>
    </div>
    <?php
}

?>