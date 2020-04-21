<html>
	<head>
                <?php include "forrobot.php"; ?>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<title>FACULTY MEMBERS</title>
		<script src="jquery-1.12.4.min.js"></script>
	
		<script>
		$(document).ready( function()
		{
		
		});		
		</script>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="page-body">
                        <?php include "common-header.php"; ?>
                    
			
			
			
			
			
			<div id="content"> 		
				<div id="content-text">
				<h1>FACULTY MEMBERS </h1>				
				<p class="justifiedpara">
					<span class="dropcap">T</span>he Joint Academic Programme (JAP-BMI) is proud of its 
					mainstay - the Faculty Members, form vibrant fields of Academics and Industries, 
					they work against all the difficulties and achieve beyond expectation both in 
					teaching and research. 
					
					<ol class="ol-list">
<?php
    $faclist = @fopen("facultylist.txt", 'r'); 

// Add each line to an array
    if ($faclist) 
    {
        $arr= explode("\n", fread($faclist, filesize("facultylist.txt")));
        $arrFaculty = array();
        
        foreach ($arr as $line1)
        {           
            $arrChild= explode("=", $line1);     

            $arrFaculty[$arrChild[0]] = $arrChild[1];
        }
        
        ksort($arrFaculty);
        
        foreach ($arrFaculty as $lineFaculty)
        {
            echo "<li>";
            echo $lineFaculty;
            echo "</li>";
        }
        
    }
?>
   
					</ol>
				</p>
				
				
				</div>
			</div>
			
			
			<?php include "common-footer.php"; ?>
			
		</div>
	</body>
</html>