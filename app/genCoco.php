<?php

require_once '../vendor/autoload.php';
require_once 'boilerplate.php';

function genOne($file){
	
}

function genAll(){
	
	if ($handle = opendir('../articles')) {

    	while (false !== ($file = readdir($handle))) {
        	if (strpos($file,getFileType())) {
            		genOne($file);
        	}
    	}

    	closedir($handle);
	}
	
}
