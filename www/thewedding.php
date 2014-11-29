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

    <!-- Two-column photo and overview of the venues -->
    <div class="container2 padded-space-above">
        <div class="container1">
            <div class="col1"> <!-- Kubota Gardens column -->
                <div>
                    <img src="images/kubota.png" class="venue-image"/>
                </div>
                <div class="venue-heading">
                    CEREMONY, 5PM
                </div>
                <div class="capitalized-heading">
                    KUBOTA GARDENS
                </div>
                <div class="body-text serif-font" style="margin-top: 30px">
                    <p>
                        We will be married at Kubota Gardens, a beautiful 20 acre, Japanese garden started in 1927 by Fujitaro Kubota. In 1972 the Japanese Government awarded Fujitaro Kubota with a rare honour, the Fifth Class Order of the Sacred Treasure, for this achievements in his adopted country, for introducing and building respect for Japanese Gardening in this area.
                    </p>
                    <p>
                        <i class="grey small-subtext">
                            Learn more about the garden, and Fujitaro Kubota <a href="http://www.kubotagarden.org/">here</a>.
                        </i>
                    </p>
                </div>
            </div>

            <div class="col2"> <!-- Ray's Boathouse column -->
                <div>
                    <img src="images/rays.png" class="venue-image"/>
                </div>
                <div class="venue-heading">
                    COCKTAILS AND RECEPTION, 6:00PM
                </div>
                <div class="capitalized-heading">
                    RAY'S BOATHOUSE
                </div>
                <div class="body-text serif-font" style="margin-top: 30px">
                    <p>
                        This is where the real celebration begins. Cocktail hour will be taking place in the Northwest Room of Ray's Boathouse - a lovely restaurant on the shores of Ballard overlooking Puget Sound and the Olympic Mountains. Dinner will be served at 7:15 with dancing to follow, so be sure to bring your dancing shoes!
                    </p>
                    <p>
                        <i class="grey small-subtext">
                            Learn more about Ray's Boathouse <a href="http://www.rays.com/">here</a>.
                        </i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Two-column map and location details -->
    <div class="container2" style="margin-bottom: 40px">
        <div class="container1" style="margin-bottom: 40px">
            <div class="col1"> <!-- Kubota Gardens column -->
                <span class="grey">
                    <div class="details-heading">
                        THE DETAILS
                    </div>
                    <!-- 
                    <div id="kubotaMapDiv" class="embeddedMap"></div>
                    -->
                    <!-- Embedded map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2694.8166351797995!2d-122.26610948316817!3d47.5129621113612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1393108753973" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                    <p style="margin-top: 10px">
                        Kubota Gardens
                    </p>
                    <p>
                        9817 55th Avenue S, Seattle, WA
                    </p>
                    <p style="margin-top: 10px" class="largeLineSpacing">
                        Parking is available and free. Porta-Potties are available on-site, but we shouldn't be there long. Stay tuned for shuttle information from the hotel to the ceremony site.
                    </p>
                </span>
            </div>

            <div class="col2"> <!-- Ray's Boathouse column -->
                <span class="grey">
                    <div class="details-heading">
                        THE DETAILS
                    </div>
                    <!-- Embedded map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1343.28389769912!2d-122.40693477565951!3d47.67339208648998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1393109429192" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                    <p style="margin-top: 10px">
                        Ray's Boathouse
                    </p>
                    <p>
                        6049 Seaview Ave NW, Seattle, WA
                    </p>
                    <p style="margin-top: 10px" class="largeLineSpacing">
                        Parking is available and free. Stay tuned for shuttle information.
                    </p>
                </span>
            </div>
        </div>
    </div>

    
    <div id="rsvp-blurb" class="section-separation">
        <div class="capitalized-heading">
            WE'D LOVE TO SEE YOU!
        </div>
        <p class="body-text serif-font">
            If you received a save the date or invite from us, we would love for you to RSVP so we know if you will be able to attend or not. Kindly reply by August 1st. Questions? Feel free to contact us at <a href="mailto:simonandedrea@gmail.com">simonandedrea@gmail.com</a>.
        </p>
        <p class="small-subtext serif-font grey" style="display: none">
            <i>
                Also, be sure to check out our city guide for a list of some of our favourite places and recommendations while visiting Seattle
            </i>
        </p>
    </div>

    <div id="rsvp-line">
        <div id="rsvp-button">
            <a href="rsvp.php"><img src="images/button_rsvp.png"></a>
        </div>
    </div>

    <!-- Two-column flignts and coming soon -->
    <div class="container2" style="margin-bottom: 40px">
        <div class="container1" style="margin-bottom: 40px">
            <div class="col1">
                <div class="venue-heading">
                    GETTING HERE
                </div>
                <div class="capitalized-heading">
                    FLIGHTS
                </div>
                <div class="body-text serif-font" style="margin-top: 30px">
                    <p>
                        There are two direct flights to Seattle from Toronto through Air Canada, and multiple flights from Toronto to Seattle with stopovers on the way. We have found <a href="http://www.hipmunk.com/">Hipmunk</a> and <a href="http://travel.bing.com/">Bing</a> to be a good place to search for flights as they search all airlines.
                    </p>
                </div>
            </div>

            <div class="col2">
                <div class="venue-heading">
                    PLACES TO STAY
                </div>
                <div class="capitalized-heading">
                    ACCOMODATIONS
                </div>
                <div class="body-text serif-font" style="margin-top: 30px">
                    <p>
                        Check back for more details in the future on hotels.  <a href="https://www.airbnb.com/">Airbnb</a> is a great option if you're looking for a good deal.
                    </p>
                    <p class="grey small-subtext" style="margin-top: 10px; line-height: 125%">
                        <i>
                            If you're traveling solo and would like to split a room with somebody, let us know and we'll put you in contact with other solo guests
                        </i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Two-column Thanks! -->
    <div class="container2 section-separation" style="margin-bottom: 40px">
        <div class="container1" style="margin-bottom: 40px">
            <div class="col1">
                <div class="venue-heading">
                    THANKS!
                </div>
                <div class="capitalized-heading">
                    GIFT REGISTRIES
                </div>
                <div class="body-text serif-font" style="margin-top: 30px">
                    <p>
                        Check out our <a href="registry.php">registry page</a> to see which stores we're registered with.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-separation" style="margin-bottom: 80px"></div>
</div>

<?php write_html_footer(); ?>