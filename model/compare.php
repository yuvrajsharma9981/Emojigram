<?php

/**
 * Compare the phrase enter by user to the phrase enter by author in the datase
 */

require ('../view/header.php');
require ('database.php');

$userinput = $_POST['fname'];
$sql = "Select * from phrases";
$phrases = $db->query($sql);

$count = 0;

foreach($phrases as $phrase){
    $p = $phrase['phrase'];
    $result = strcasecmp($userinput,$p );
    if($result == 0){
    	echo"    	
        <script> 
        sweetAlert({
			title: 'Congrats!',
			text: 'You got it right!',
			type: 'success',
			confirmButtonColor: '#1DC116',
			confirmButtonText: 'Ok!',
			closeOnConfirm: false,
			},
			function(isConfirm){
			if (isConfirm) {
			window.history.back();   } 
			 });
        </script>";
		$count = 1;
    }
}
if($count != 1){
	echo "
	<script> 
        sweetAlert({
			title: 'Sorry!',
			text: 'Guess Again!',
			type: 'error',
			confirmButtonColor: '#FF5A79',
			confirmButtonText: 'Ok!',
			closeOnConfirm: false,
			},
			function(isConfirm){
			if (isConfirm) {
			window.history.back();   } 
			 });
        </script>";
	}
?>