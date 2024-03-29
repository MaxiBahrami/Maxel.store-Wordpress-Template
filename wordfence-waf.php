<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

// This file was the current value of auto_prepend_file during the Wordfence WAF installation (Thu, 09 Nov 2023 01:06:34 +0000)
if (file_exists('/usr/local/libexec/loopia/mailwrapper-php/mailwrapper-php-envs.php')) {
	include_once '/usr/local/libexec/loopia/mailwrapper-php/mailwrapper-php-envs.php';
}
if (file_exists(__DIR__.'/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", __DIR__.'/wp-content/wflogs/');
	include_once __DIR__.'/wp-content/plugins/wordfence/waf/bootstrap.php';
}