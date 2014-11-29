<?php
include 'site-common.php';
write_html_header();
?>


<span>
    <span class="sans-serif-font">
        <div id="subpage-header-image" class="header-image-background-color">
            <a href="index.php"><img src="images/header_sm.png" class="center"/></a>
        </div>
        <?php draw_navigation_menu(); ?>
    </span>

    <div id="fixed-width-container" class="padded-space-above">

<?php
    /*
     * Validate the info server-side and submit if it all looks kosher
     */
    $to = $RSVP_MAIL_TO_ADDRESS;
    $subject = "Wedding RSVP";

    $headers = "From: " . $RSVP_FROM_ADDRESS . "\r\n";
    $headers .= "Reply-To: " . $RSVP_REPLY_TO_ADDRESS . "\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();

    if (!isset($_POST["name"]) ||
        !isset($_POST["attending"]))
    {
        die("Incomplete data - fail");
    }

    if (!($_POST["attending"] == "yes" || $_POST["attending"] == no))
    {
        die("Invalid value for attending value");
    }

    if ($_POST["attending"] == "yes")
    {
        if (!isset($_POST["email"]))
        {
            die("Incomplete data (email) - fail");
        }
    }

    $attending = filter_var($_POST["attending"], FILTER_SANITIZE_STRING);
    $names = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $name2 = filter_var($_POST["name2"], FILTER_SANITIZE_STRING);

    $message = "RSVP\r\n";
    $message .= "Guest 1: " . $names . "\r\n";
    $message .= "Guest 2: " . $name2 . "\r\n";
    $message .= "Attending: " . $attending . "\r\n";
    $message .= "Email: " . $email . "\r\n";
    
    AddToDatabase($names, $name2, $email, $attending);
    mail($to, $subject, $message) or die("Couldn't send mail! Try again later.");

    if ($attending == "yes")
    {
        echo "Got it - see you in August!";
    }
    else
    {
        echo "Got it - sad we won't see you in August :/";
    }

    function AddToDatabase($names, $name2, $email, $attending)
    {
        if ($MYSQL_SERVER == "mysql.myfakehost.com")
        {
            return;
        }
        
        global $MYSQL_SERVER, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DATABASE;
        $db_handle = mysql_connect($MYSQL_SERVER, $MYSQL_USERNAME, $MYSQL_PASSWORD);
        if (!$db_handle)
        {
            return 0;
        }

        $db_found = mysql_select_db($MYSQL_DATABASE, $db_handle);
        if (!$db_found)
        {
            return 0;
        }

        $sql = "INSERT INTO weddingrsvp (name, email, attending, name2) VALUES ('$names', '$email', '$attending', '$name2')";

        $insert_result = mysql_query($sql, $db_handle);

        if (!$insert_result)
        {
            return 0;
        }

        mysql_close($db_handle);

        return 1;
    }
?>

    </div>

</span>

<?php write_html_footer(); ?>