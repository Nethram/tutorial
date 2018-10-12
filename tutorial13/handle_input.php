<?php header('Content-type: application/xml'); ?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
<?php
  $key = $_REQUEST['Digits'];
  switch($key){
	case "1": 
		echo("<Dial> <Number url =\"whisper.php?dept=new\"> 3024404084 </Number> </Dial>");
		break;
	case "2": 
		echo("<Dial> <Number url =\"whisper.php?dept=billing\"> 3024404084 </Number> </Dial>");
		break;
	case "3": 
		echo("<Dial> <Number url =\"whisper.php?dept=existing\"> 3024404084 </Number> </Dial>");
		break;
	case "4": 
		echo("<Say> We are located in 375 Beale Street in San Francisco </Say>");
		break;
	default:
		echo("<Say> That is an invalid option. Please try again </Say>");
		echo("<Redirect>main_menu.xml</Redirect>");
  }
?>
</Response>