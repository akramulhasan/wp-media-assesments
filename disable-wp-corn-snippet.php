<?php

/*
If you want to create a Cron job from the server, first you need to disable WP Cron, so it is not executed every time someone loads one of your pages. To disable it, open the wp-config.php file in your main WordPress folder and add the following line before the - That's all, stop editing! Happy blogging.
*/

define('DISABLE_WP_CRON', true);