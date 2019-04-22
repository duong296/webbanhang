<?php 
	/**
	* get input
	*/

	/**
	* post input
	*/
	function postInput($string)
	{
		return inset($_post[$string]) ? $_post[$string] : '';
	}
 ?>