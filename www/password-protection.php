<?php

if ($NO_PASSWORD_NEEDED != true)
{
    if (!isset($_SESSION['accessgranted']) && $CURRENT_PAGE != "password-submit.php")
    {
        include 'password-entry.php';
    }
}
?>