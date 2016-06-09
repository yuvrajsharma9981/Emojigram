<?php
	include("header.php");
	if( !empty($_GET["new"]) ){
				echo "
				<div class='submit-feedback_green' >
					<p>You have added $n phrase(s) to the site.</p>
				</div>	
					";
	}

?>
		<div class="submit-feedback"><p>Add A New Emojigram!</p></div>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<p class="emoji-link"><a href='http://emojione.com/demo/' target='_blank'>See Shortnames</a></p>
		<form class="addForm" action="../control/index.php?new=phrase" method="post">
		<tr>
					
			<td><input type="text" class="submit" required name="pEmoji" placeholder="Shortname"/></td>
			<td><input type="text" class="submit" required name="pPhrase" placeholder="Phrase"/></td>
			<td><input type="text" class="submit" required name="pHint" placeholder="Hint"/></td>
			<td><input type="text" class="submit" required name="pAuthor" placeholder="Your Name"/></td>
			
			<td></td>
			<br/>
			<td><input type="submit" class="submit_btn" value="Add New" /></td>
		</tr>
		</form>
	
<?php
	include("footer.php");
?>