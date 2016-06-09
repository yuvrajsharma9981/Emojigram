<?php	
/*
 * The function inserts a new phrase record 
 * into the phrase table.
 */
	function addPhrase($phrase, $author, $emoji, $hint) {
		global $db;
		$sql = "INSERT INTO phrases(phrase, emoji, hint, author ) values ('$phrase', $emoji, $hint, $author)";
		$num = $db->exec($sql);
		return $num;
	}
?>