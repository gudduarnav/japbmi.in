<html>
	<head>
                <?php include "forrobot.php"; ?>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<title>NOTIFICATIONS</title>
		<script src="jquery-1.12.4.min.js"></script>
	
		<script>
		$(document).ready( function()
		{
		
		});		
		</script>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
                
                <style>
                    .even_show
                    {
                        color: #00000;
                        background-color: #ccccff;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        padding-left: 20px;
                        padding-right: 20px;
                        font-weight: 800;
                        font-size: 16px;
                    }
                    
                    .odd_show
                    {
                        color: #000000;
                        background-color: #efefef;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        padding-left: 20px;
                        padding-right: 20px;
                        font-weight: 800;
                        font-size: 16px;
                    }
                    
                    .my_a
                    {
                        color: inherit;
                        text-decoration: none;
                    }
                    
                </style>
                
                
	</head>
	<body>
		<div id="page-body">
                    <?php include "common-header.php" ?>
                    
		
			
			<div id="content"> 		
                            <div id="content-text">
				<h1>NOTIFICATIONS</h1>
				
                                <?php include "notification_edit.php" ?>
				
                                
                                
                            </div>
			</div>
			
			<?php include "common-footer.php"; ?>
			
			
			
		</div>
	</body>
</html>