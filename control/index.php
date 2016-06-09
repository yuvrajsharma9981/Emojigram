<?php
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	
	require("../model/database.php");
	require("../model/author.php");
	require("../model/phrase.php");
	
	if(empty($_GET)){
		// List all the phrases
		$auths = getAuthors();
		include("../view/authors.php");
	}
	else {
		//add new item to database
		if( !empty($_GET["new"]) ){
			$phrase = $_POST['pPhrase'];
			$author_id = $_POST['pAuthor'];
			$emoji = $_POST['pEmoji'];
			$hint = $_POST['pHint'];
			$n = addPhrase($phrase, $author_id, $emoji, $hint);
			include("../view/add.php");
		}
	}
?>