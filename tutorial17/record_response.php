<?php header('Content-type: application/xml'); ?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
 <Say> Your voicemail with <?php echo($_REQUEST["RecordingDuration"]); ?> seconds duration has been received</Say>
 <Say> Replaying the message </Say>
 <Play><?php echo($_REQUEST["RecordingUrl"]); ?></Play>
</Response>