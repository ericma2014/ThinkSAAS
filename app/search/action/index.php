<?php 

switch($ts){
	case "":
		$title = '搜索';
		break;
	
	//搜索小组
	case "group":
		$title = '搜索小组';
		break;
}

include template("index");