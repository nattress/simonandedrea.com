<?php
//
// Site-wide configuration knobs
//

//
// The password your guests have to enter to enter your wedding site.
// There are two here because a typical password is the wedding date
// and relatives from the US / Europe enter dates differently, so this
// will help make sure your Grandma can get in
//
$SITE_PASSWORD="1234";
$SITE_PASSWORD2="1234";

//
// If set to true, no password prompt will appear and the site will be
// fully accessible. I disabled passwords once I took down the RSVP page,
// since then the site is read-only and there's no harm shouting to the
// world you're getting married. Some rich millionaire might happen upon
// it and buy a gift off your registry :)
//
$NO_PASSWORD_NEEDED=false;

//
// Prevent those flakers from RSVPing at the last minute and disable
// RSVP section after your cut-off date.  We did this to ensure anybody
// RSVPing at the last minute told us directly.
//
$SHOW_RSVP_FORM=true;

//
// RSVP Mail To Address
// You'll need to make sure your webhost is set up for php mail to work.
// My host (Dreamhost) required no configuration; it just worked.
//
$RSVP_MAIL_TO_ADDRESS="reply@us.com";
$RSVP_FROM_ADDRESS="webmaster@us.com";
$RSVP_REPLY_TO_ADDRESS="noreply@us.com";

//
// MySQL database connection and table name
// This is optional since we also email RSVPs to the email address you select.
// I did both to hedge against flakey spam filters or some network failure 
// preventing an RSVP getting through and just manually hit my database after
// the RSVP cut-off to ensure the two lists were in sync.
//
$MYSQL_SERVER="mysql.myfakehost.com";
$MYSQL_USERNAME="user";
$MYSQL_PASSWORD="password";
$MYSQL_DATABASE="dbname";

$MENU_PAGES = array(
        "HOME" => "index.php",
        "THE WEDDING" => "thewedding.php",
        "RSVP" => "rsvp.php",
        "REGISTRY" => "registry.php",
        "ABOUT US" => "aboutus.php"
    );

//
// Ignore below here. It's internal stuff
//
$CURRENT_PAGE=basename($_SERVER['PHP_SELF']);

?>