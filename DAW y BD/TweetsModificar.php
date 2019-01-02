<?php require_once("modelo.php");?>

<?php
	
	modificarTweet($_GET['tweet'],"Que onda bros!");
	
   
 	echo getTweet();
    
?>