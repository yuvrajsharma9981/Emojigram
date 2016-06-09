<?php
/**
 * To get the databse content from the phrase table
 */


	function getAuthors(){
		global $db;
		$sql = "select * from phrases";
		$auths = $db->query($sql);
		return $auths;
	}
?>