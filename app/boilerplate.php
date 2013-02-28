<?php

require_once 'config.php';

getFileType(){

	if($config['fileType'] == "md" || $config['fileType'] == "MD" || $config['fileType'] == "markdown") return "md";
	else if($config['fileType'] == "txt" || $config['fileType'] == "TXT" || $config['fileType'] == "text") return "txt";
	else return false;

}

getFileExtension(){

	if(getFileType()) return ".".getFileType()."";
	else return false;

}

getFileTypeHuman(){

	if(getFileType() == "md") return "Markdown";
	else if(getFileType() == "txt") return "Text";
	else return false;

}
