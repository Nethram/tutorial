<?php header('Content-type: application/xml'); ?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
<?php
	if(strcmp($_REQUEST['From'],"+13037313353")==0)
	{
		echo("<Redirect>gather_number.xml</Redirect>");
	}
	else
	{
		echo("<Redirect>main_menu.xml</Redirect>");
	}
?>
</Response>