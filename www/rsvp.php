<?php
include 'site-common.php';
write_html_header();
?>

<script type="text/javascript" src="js\jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js\validate.min.js"></script>

<span>
    <span class="sans-serif-font">
        <div id="subpage-header-image" class="header-image-background-color">
            <a href="index.php"><img src="images/header_sm.png" class="center"/></a>
        </div>
        <?php draw_navigation_menu(); ?>
    </span>

    <div id="fixed-width-container" class="padded-space-above">
        <?php if (!$SHOW_RSVP_FORM)
        {
        ?>
        Please talk to us directly if you'd still like to come now we're getting close to the big day :)
        <?php
        } else
        {
        ?>
        <div id="form-container">
            <div class="error_box"></div>
            <form name="rsvp" action="rsvp_submit.php" method="post">

                <label for="name">Guest 1:</label>
                <input type="text" name="name" id="name" />
                
                <label for="name2">Guest 2:</label>
                <input type="text" name="name2" id="name2" />

                <label>Coming?</label>

                <div id="attending_checkboxes">
                    <input type="radio" name="attending" id="attending_yes" checked="checked" value="yes">
                    <label for="attending_yes" id="attending_yes_label">Yes! Can't wait to celebrate!</label>
                    <input type="radio" name="attending" id="attending_no" value="no">
                    <label for="attending_no" id="attending_no_label">Sadly we will be celebrating from afar :(</label>
                </div>

                <label for="email">Email Address:</label>
                <input type="text" name="email" id="email" />
                
                <button class="button" name="submit" type="submit" style="border: none; background-color: #2E77D9; color: white; padding-top: 7px; padding-bottom: 7px; padding-left: 25px; padding-right: 25px; float: right">SUBMIT</button>
            </form>
        </div>
        <?php
        } ?>
    </div>

</span>

<script type="text/javascript">

    new FormValidator('rsvp', [{
        name: 'name',
        display: 'name',
        rules: 'required'
    }, {
        name: 'email',
        rules: 'required|valid_email',
        depends: function(field)
        {
            return $("input:radio[name=attending]:checked").val() == "yes";
        }
    }], function(errors, evt) {

        var SELECTOR_ERRORS = $('.error_box');
            
        if (errors.length > 0) {
            SELECTOR_ERRORS.empty();
            
            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                SELECTOR_ERRORS.append(errors[i].message + '<br />');
            }
            
            SELECTOR_ERRORS.fadeIn(200);
        }
        else
        {
            document.rsvp.submit();
        }

        if (evt && evt.preventDefault) {
            evt.preventDefault();
        } else if (event) {
            event.returnValue = false;
        }
        
    });

</script>
<?php write_html_footer(); ?>