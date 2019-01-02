<?php require_once("modelo.php");?>

<?php
	
	eliminarTweet($_GET['id_tweet']); 
	
	
   
 	echo getTweet();
    
?>
