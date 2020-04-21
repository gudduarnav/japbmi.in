<?php
    $xml = simplexml_load_file("events.xml");
    
    foreach ($xml as $message) 
    {
		if($message->enabled == 1)
		{
			echo "<p>";
			echo "<h2>".$message->date."</h2>";
			echo "<a href='".$message->redirect."'>".$message->subject."</a>";
			echo "</p>";
		}
    }

?>
