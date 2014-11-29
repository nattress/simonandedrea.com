# simonandedrea.com

This repo contains our wedding website from our August 2014 wedding!  It was hand-coded in PHP and might be useful for others wanting to roll a custom wedding website or just copy our design. It's pretty basic and has these features:

  - Centralised config file for enabling and setting site password, managing pages that are displayed (so you can disable the RSVP page close to the date easily), setting RSVP database connection, mail-to address
  - Coded in PHP so should run on pretty much any host
  - RSVP sends mail and writes to a MySQL database (if you set one up) so you won't miss RSVPs
  - RSVP form does basic validation on email addresses
  - Layout / design pretty much separated out into separate CSS file

Make sure to rename config.TEMPLATE.php to config.php and fill in the fields for RSVP emails, mysql database connection strings, and site password.