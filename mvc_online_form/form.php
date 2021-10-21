<?php

include "config/config.php";

include "templates/form.html";

?>

<form method="post" action="verify.php">
        <?php
          require_once('lib/recaptchalib.php');
          $publickey = "6LeT0cgSAAAAAG4NLJ1diyG1ZFSs72MNZl1QEgvE"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <input type="submit" />
      </form>

