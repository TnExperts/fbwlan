
<?php echo $head; ?>
    <div class="pure-g">
       <div class="pure-u-1 pure-u-md-2-3">
        <p> <?php
            echo _('We offer free Wifi.');
            echo _('We\d like to ask you to return the favor and check in to our location on Facebook.');
            echo _('So, let your friends know you\'re here and start surfing the web!');
            ?>
        </p>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <a class="pure-button pure-button-primary" href="<?php echo $fburl; ?>"><?php echo _('Connect to Facebook'); ?></a>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-2-3">
            <p> <?php
                echo _('It\'s ok if you do not want to use Facebook.');
                echo _('Simply ask the staff at our location for the access code and enter it below.');
                ?>
        </p>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <form class="pure-form">
                <fieldset>
                    <legend><?php echo _('Access code'); ?></legend>
                    <input type="text" placeholder="XXXXXX" name="access_code"></input>
                    <button type="submit" class="pure-button pure-button-primary" action="<?php echo $codeurl; ?>">
                        <?php echo _('Sign in'); ?>
                    </button>
                </fieldset>
            </form>
        </div>
    </div>


<?php echo $foot; ?>