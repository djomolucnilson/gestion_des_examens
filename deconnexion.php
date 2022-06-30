<?php
session_start();
if(session_destroy())
{
	header("location: formulairE.php");
	alert("Merci");
}
?>