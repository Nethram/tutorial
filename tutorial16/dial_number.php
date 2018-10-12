<?php header('Content-type: application/xml'); ?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
<?php
  $number_to_dial = $_REQUEST['Digits'];
  $caller_id      = $_REQUEST['To'];
  if(strlen($number_to_dial) == 10)
  {
	  echo("<Dial callerId =\"$caller_id\"> $number_to_dial</Dial>");
  }
  else
  {
  	echo("<Say> Did not receive 10 digits. Please try again </Say>");
	echo("<Redirect>gather_number.xml</Redirect>");
  }
?>
</Response>