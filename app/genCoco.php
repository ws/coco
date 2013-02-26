<?php

require_once '../vendor/autoload.php';

// Note: Adding specific file gen in a bit. Should save some resources.

if ($handle = opendir('../articles')) {

    while (false !== ($file = readdir($handle))) {
        if (strpos($file,'.txt') !== false) {
            
        }
    }

    closedir($handle);
}