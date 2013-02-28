<?php

require_once '../vendor/autoload.php';

function genOne($file){
	
}

function genAll(){
	
	if ($handle = opendir('../articles')) {

    	while (false !== ($file = readdir($handle))) {
        	if (strpos($file,'.txt')) {
            	genOne($file);
        	}
    	}

    	closedir($handle);
	}
	
}
