<?php

function IndexPageRedirect()
{
       $curpagename =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
       $curpagename_lower = strtolower($curpagename);

       if(strcmp($curpagename_lower, "index.php")!=0)
       {

           header("Location: index.php");
       }
}

IndexPageRedirect();
?>

<html>
	<head>
                <?php include "forrobot.php"; ?>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<title>HOME</title>
		<script src="jquery-1.12.4.min.js"></script>

                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

                <style>
.highlight {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;

	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
        width: 740px;
}


.highlight-entry
{
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    margin-left: 5px;
    margin-right:  5px;
    text-decoration: none;
    text-align: left;
}



.hitcounter {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}





                </style>


		<script>
		$(document).ready( function()
		{

		});
		</script>

		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="page-body">
                    <?php include "common-header.php" ?>



			<div id="content">
				<div id="content-text">

				<h1>Empowering the Nation through  Indigenous  Healthcare Services</h1>

				<p class="justifiedpara">
					<span class="dropcap">C</span>onsidering the ever increasing demand
                                        of specialized manpower in this interdisciplinary field of studies
                                        and the excellent success in last few decades in terms of placement
                                        in government sectors, reputed bio-medical industries, hospitals and healthcare
                                        units as well as in academia. At present, the joint programme between
                                        CU and WBUHS is formalized to include all academic and research
                                        activities in the area of Biomedical Science and Instrumentation technology.
				</p>

				</div>
			</div>



                           <?php include "highlight_edit.php"; ?>

                    <div id="eventpane">
				<div id="eventpane-left">

					<div id="eventpane-left-title">
                                            Joint Academic Programme
                                            on
                                            2 Years M.Sc. in Biomedical Instrumentation,
                                            between two State Universities
                                        </div>
					<div id="eventpane-left-content">
						University of Calcutta<br>
						and<br>
						The West Bengal University of Health Sciences
					</div>
					<div id="eventpane-left-content-1">
					Academic Session starts from <i>July-August</i>
					</div>
				</div>

				<div id="eventpane-right">
					<div id="eventpane-right-title"><h1>Events</h1></div>
					<marquee id="eventpane-right-text" behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                                            <?php include "events_edit.php"; ?>
					</marquee> 

					<!--div id="eventpane-right-text"-->
                                            <!--?php include "events_edit.php"; ?-->
					<!--/div-->

					</div>

			</div>








                    <div id="content">
                            <div id="content-text">

                                <table>
                                    <tr>
                                        <td width="400px">

                                            <h2>

                                                CONTACT US
                                            </h2>

                                            <p class="justifiedpara">
                                                <img src="bin/contact.jpg">
                                                  <!--  Mr. P. Das
                                                    <br>
                                                    Synchro Electronics (JAP-BMI Information Centre)
                                                    <br>
                                                    P-278, C. I. T Road, Scheme - VI(M),<br>
                                                    Kolkata - 700054,<br>
                                                    West Bengal, India<br-->

                                                    <!--img src="css/contactus.png" height="40"></img-->
                                                    <!--br>
                                                    <b>Phone</b> : +91 (033) 4001 2092 (3pm to 5 pm)<br>
                                                    <b>Fax</b> : +91 (033) 2364 8756<br>
                                                    <b>Web</b> : <a href="http://www.japbmi.in">www.japbmi.in</a><br>
                                                    <b>Email</b> :
                                                    <a href="mailto:admin@japbmi.in">admin@japbmi.in</a>
                                                    <br>
                                                    <span class="padchar"> </span>
                                                    <span class="padchar"> </span>
                                                    <a href="mailto:japbmi@hotmail.com">japbmi@hotmail.com</a-->

                                            </p>

                                        </td>

                                        <td>

                                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
                                            </script>
                                            <div style='overflow:hidden;height:340px;width:340px;'>
                                                <div id='gmap_canvas' style='height:340px;width:inherit;'>

                                                </div>
                                            <div>
                                                <small>
                                                    <a href="http://embedgooglemaps.com">
                                                        embed google maps
                                                    </a>
                                                </small>
                                            </div>
                                                <div>
                                                    <small>
                                                        <a href="https://privacypolicytemplate.net">
                                                            privacy policy example
                                                        </a>
                                                    </small>
                                                </div>
                                                <style>
                                                    #gmap_canvas img
                                                    {
                                                        max-width:none!important;
                                                        background:none!important}
                                                </style>
                                            </div>
                                                <script type='text/javascript'>
                                                    function init_map()
                                                        {
                                                            var myOptions =
                                                                    {
                                                                    zoom:11,
                                                                    center:new google.maps.LatLng(22.5747806,88.3629295),
                                                                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                                                                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                                                    marker = new google.maps.Marker({
                                                                        map: map,
                                                                        position: new google.maps.LatLng(22.5747806,88.3629295)
                                                                    });

                                                                    marker1 = new google.maps.Marker({
                                                                        map: map,
                                                                        position: new google.maps.LatLng(22.5914784,88.4100133)
                                                                    });

                                                                    marker2 = new google.maps.Marker({
                                                                        map: map,
                                                                        position: new google.maps.LatLng(22.57856,88.3865303)
                                                                    });

                                                                    infowindow = new google.maps.InfoWindow({content:'<strong><font size="2">University of Calcutta</font></strong>'});
                                                                    infowindow1 = new google.maps.InfoWindow({content:'<strong><font size="2">West Bengal University of Health Sciences</font></strong>'});
                                                                    infowindow2 = new google.maps.InfoWindow({content:'<strong><font size="2">Synchro Electronics</font></strong>'});
                                                                    google.maps.event.addListener(marker, 'click', function()
                                                                                                            {
                                                                                                                infowindow.open(map,marker);
                                                                                                                infowindow1.open(map,marker1);
                                                                                                                infowindow2.open(map, marker2);
                                                                                                            });
                                                                    infowindow.open(map,marker);
                                                                    infowindow1.open(map,marker1);
                                                                    infowindow2.open(map, marker2);
                                                                    }
                                                                google.maps.event.addDomListener(window, 'load', init_map);

                                                </script>

                                        </td>



                                    </tr>
                                </table>

                            </div>
                    </div>


                        <?php include "counter.php"; ?>
			<?php include "common-footer.php"; ?>



		</div>
	</body>
</html>
