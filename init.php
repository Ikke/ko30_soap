<?php
/**
 * User: Ikke
 * Date: 21-apr-2010
 * Time: 15:30:29
 * (C) 2010
 */

	//Nusoap uses return by reference, which causes an deprecated exception in php 5.3+
	$prev_error_level = error_reporting();
	if(defined('E_DEPRECATED')){
		error_reporting(E_ALL & ~E_DEPRECATED);
	}
	else{
		error_reporting(E_ALL);
	}

	require_once(Kohana::find_file('vendor', 'nusoap/nusoap'));
	error_reporting($prev_error_level);
?>