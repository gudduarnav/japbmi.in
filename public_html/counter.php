<?php
    $counter_text = file_get_contents('counter.txt');
    $counter_int = intval($counter_text);
    $counter_int++;
    $counter_text = strval($counter_int);
    file_put_contents("counter.txt", $counter_text);
?>

<div class="hitcounter">Visitors <?php echo str_pad($counter_text, 8, '0', STR_PAD_LEFT);; ?></div>
                        
                     
  
  
