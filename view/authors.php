<?php
	include("header.php");	
	
	
			foreach($auths as $phr){
			$id = $phr["id"];
			$auth_id = $phr["author"];
			$emoji = $phr["emoji"];
			$phrase = $phr["phrase"];
			$hint = $phr["hint"];
			$link = "<a href='index.php?delete=$id'>Delete</a>";
			echo "
			
	 
			
			
				<div class='phrase'>
					<div class='phrase-entry'>
						<div class='phrase-entry_inner'>
							<div class='phrase-entry_item phrase-entry_id'>$id</div>
							
							
							<input type='text' class='hideMe' id='input$id' name='inputText' value='$emoji' readonly />
							<img onload='convert(\"$id\")' class='hideMe' src='https://common-lisp.net/~loliveira/ediware/cl-gd/test/orig/one-pixel.png'>
							<!--<input type='image' onload='convert()' id='ouputText' />	-->						
							
							<p  class='emojiOutput' id='output$id'>Reveal</p>
							
							
							
							
							
							<!-- <div class='phrase-entry_item' id='convert' onclick='convert()'>$emoji</div> -->
							<div class='phrase-entry_item phrase-entry_hint'>$hint</div>
						</div>
						<div class='phrase-entry_inner'>
							<div class='phrase-entry_item phrase-entry_auth'>$auth_id</div>
						</div>
					</div>
					
					<div class='phrase-input_wrap'>
						<form action='../model/compare.php' method='post'>
							<input type='submit' value='&#8594'>
						    <input type='text' name='fname'/>
						    
						</form>
					</div>  
				  </div>";
		}
	
	
	
	include("footer.php");
?>