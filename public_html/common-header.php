<div id="banner"></div>

    <div id="placeholder">
			
            <div id="imagepane">
                    <marquee behavior="scroll" direction="left" scrollamount="4">
<?php
$counter = 0;
foreach(glob("album/*.jpg") as $file) {
	echo "<image src='".$file."' />";
}		
?>                  </marquee>	
            </div>
    </div>


<?php
    function getIDofMenu($thispagename)
    {
       $curpagename =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
       $thispagename_lower = strtolower($thispagename);
       $curpagename_lower = strtolower($curpagename);
       
       if(strcmp($thispagename_lower, $curpagename_lower) == 0)
       {
           echo "class='active'";
       }
       else 
       {
           echo " ";
       }
    }
?>


    <ul id="menu-bar">
            <li <?php getIDofMenu("index.php");?> ><a href="index.php">Home</a></li>
            <li <?php getIDofMenu("university.php"); ?> ><a href="university.php">Universities</a></li>
            <li <?php getIDofMenu("academics.php"); ?> ><a href="academics.php">Academics</a> </li>
            <li <?php getIDofMenu("faculty.php"); ?> ><a href="faculty.php">Faculty Members</a></li>
            <li <?php getIDofMenu("training.php"); ?> ><a href="training.php">Training and Placements</a></li>
            <li <?php getIDofMenu("notifications.php"); ?> ><a href="notifications.php">Notifications</a></li>
            <li <?php getIDofMenu("mail.php");?> ><a href="mail.php" target="_blank">Webmail</a></li>
    </ul>
                        
                     
			
			
	