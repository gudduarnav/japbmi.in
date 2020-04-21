


<?php
    $xml = simplexml_load_file("notifications.xml");
    
    $counter = 0;
    foreach ($xml as $message) 
    {
		if($message->enabled == 1)
		{
			if($counter == 0)
			{
				echo "<div class='even_show'>";
			}
			else 
			{
				echo "<div class='odd_show'>";
			}
			
			echo "<a class='my_a' target='_blank' href='".$message->redirect."'>".$message->subject."</a>";
			echo "</div>";
			
			$counter ++;
			$counter = $counter % 2;
		}
    }

?>
