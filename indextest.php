<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE HTML>
<!--
    2014 Capstone Symposium Website
    Created by:
        Kyle Poole
        Cory Purnell
        Dylan Moore
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Camosun College - Technology Symposium 2014</title>

        <!-- css incldues -->
        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/font-awesome.min.css" rel="stylesheet" />
        <link href="./css/jquery.fullPage.css" rel="stylesheet"/>
        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

        <!-- Source Sans Pro font -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300, 400,700,900' rel='stylesheet' type='text/css'>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/jquery.fullPage.js"></script>

        <!-- For interactive menus -->
        <script type="text/javascript" src="./js/hexMenu.js"></script>

        <script>
            $(document).ready(function() {
                // Activate the full page capabilities.
                $('#fullpage_top').fullpage({
                    anchors: ['welcome'],
                    'slidesColor' : ['white'],
                    'autoScrolling' : false
                });
            });
        </script>
    </head>

    <body>
    <!-- floating menu -->
    <div id="hex_menu">
        <div class="small_hex_container" id="floating_menu">
            <div class="half_hexagon groups_hexagon" id="groups_hexagon_small">
                <div class="half_hex_center_box">
                    <div class="half_hexagon_text"> GROUPS </div>
                </div>
            </div>
            <div class="half_hexagon sponsors_hexagon" id="sponsors_hexagon_small">
                <div class="half_hex_center_box">   
                    <div class="half_hexagon_text"> SPONSORS </div>
                </div>
            </div>
            <div class="half_hexagon symposium_hexagon" id="symposium_hexagon_small">
                <div class="half_hex_center_box">
                    <div class="half_hexagon_text"> SYMPOSIUM </div>
                </div>
            </div>
            <div class="half_hexagon register_hexagon" id="register_hexagon_small">
                <div class="half_hex_center_box">
                    <div class="half_hexagon_text"> REGISTER </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullpage_top">
        <div class="section" id="welcome">
            <div class="row">
                <div class="col-md-12">
                    <img class="welcome_graphic" src="./images/Header - No Date.jpg"  />
                </div>
            </div>
            <div class="row">
                <h1 class="welcome_text">An open showcase of graduating students' projects.</h1>
            </div>
            <div class="welcome_selection_menu row">
                <div class="col-md-6 welcome_group_and_sponsors">
                    <div class="welcome_hex_container" id="left_hex_container">
                        <div class="hexagon groups_hexagon" id="groups_hexagon_big">
                            <div class="hex_center_box">
                                <div class ="hexagon_text">GROUPS</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome_hex_container" id="left_hex_container">
                        <div class="hexagon sponsors_hexagon" id="sponsors_hexagon_big">
                            <div class="hex_center_box">
                                <div class ="hexagon_text">SPONSORS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 welcome_symposium_and_register">
                    <div class="welcome_hex_container" id="right_hex_container">
                        <div class="hexagon symposium_hexagon" id="symposium_hexagon_big">
                            <div class="hex_center_box">
                                <div class ="hexagon_text">SYMPOSIUM</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome_hex_container" id="right_hex_container">
                        <div class="hexagon register_hexagon" id="register_hexagon_big">
                            <div class="hex_center_box">
                                <div class ="hexagon_text">REGISTER</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-arrow-down welcome_down_arrow"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll groups">
        <div class="container">
            <!--  Header text -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section_header">Computer Systems Technology</h1>
                </div>
            </div>

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/stonecroft_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Team Yellow Pengiun</h3>
                        <h4><span>Project:</span>Website and Database Management System</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Stonecroft Landscapes Company</a></h4>
                        <p>Team Yellow Penguin has been working with Stonecroft Landscapes to implement a website and a database management system.</p>
                        <p>The website improves the company’s ability to stay strong and competitive on Vancouver Island. In addition, the website provides an alternative way to serve SCL’s customers. The database management system improves employees’ efficiency, helps eliminate paperwork, and automates the current business system</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team Stonecroft.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/sendwithus_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team Sendwithus.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Introverted Wizards</h3>
                        <h4><span>Project:</span>sendwithus WordPress Plugin</h4>
                        <h4><span>Sponsored by:</span><a href="http://www.sendwithus.com" target="_">Sendwithus</a></h4>
                        <p>The sendwithus WordPress plugin allows WordPress site administrators to easily enable transactional email capabilities within their existing WordPress installations.</p>
                        <p>With the power of the sendwithus WordPress plugin, site administrators can easily send transactional emails that make use of A/B testing, drip campaigns, easy to create templates, and a set of powerful analytical tools.</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/northpark_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3>2 Legit 2 Quit</h3>
                        <h4><span>Project:</span>NPNA e-Newsletter and Website Refresh 
Project</h4>
                        <h4><span>Sponsored by:</span><a href="http://npna.ca/" target="_">North Park Neighbourhood Association</a></h4>
                        <p>The NPNA e-Newsletter and Website Refresh Project’s primary goal was to create a new, modern website for the NPNA. This website includes an integrated e-Newsletter, an event calendar, an executives’ forum, and a document archive, and the overall security of the website was considered paramount during its development. </p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team North Park.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/tiu_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team TIU.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3>Team TIU</h3>
                        <h4><span>Project:</span>Turn It Up Mobile Application</h4>
                        <h4><span>Sponsored by:</span><a href="http://need2.ca/" target="_">NEED2</a></h4>
                        <p>Turn It Up (TIU) is an ongoing campaign put on by NEED2, Victoria’s suicide prevention centre. The campaign is designed to begin the de-stigmatization of conversations about suicide within our culture. The TIU application is poised to bring this campaign into the mobile sphere by allowing youth to collaboratively make some noise about suicide prevention!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/zumbini_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3>Team Zumbini</h3>
                        <h4><span>Project:</span>Zumbini Website</h4>
                        <h4><span>Sponsored by:</span><a href="http://www.westshorezumba.com/" target="_">WZ Latin Party Fitness</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team Zumbini.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-4 center">
                    <img src="./images/Team Nemo.jpg" style="max-width: 100%" />

                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3>Team Nemo</h3>
                        <h4><span>Project:</span>Project Nemo</h4>
                        <h4><span>Sponsored by:</span><a href="http://dactylstudios.com/" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">

                <div class="visible-xs xs-col-12">
                    <img src="./images/sm/nfis_sm.jpg" class="img-rounded xs-group-image" />
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 center">
                    <div class="group_description">
                        <h3>Team NFIS</h3>
                        <h4><span>Project:</span>NFIS</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-4 center">
                    <img src="./images/Team NFIS.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-4 center">
                    <img src="./images/Team LTEMA.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Team LTEMA</h3>
                        <h4><span>Project:</span>Project Here</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Team Educask</h3>
                        <h4><span>Project:</span>Educask</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="col-xs-4 center">
                    <img src="./images/Team Educask.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-4 center">
                    <img src="./images/Team Awesome Possum.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Team Awesome Possum</h3>
                        <h4><span>Project:</span>Project Here</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- ELEX area -->
            <!--  Header text -->
            <div id="elex-projects" class="row">
                <div class="col-md-12">
                    <h1 class="section_header">Electronics & Computer Engineering Technology</h1>
                </div>
            </div>

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-4 center">
                    <img src="./images/Team AGS Electronics.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3 style="font-style:bold">Team AGS Electronics</h3>
                        <h4><span>Project:</span>Project Here</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text left aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3>Team R-Motion</h3>
                        <h4><span>Project:</span>AE35 Unit</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Electrical and Mechanical Technology Departments of Camosun College</a></h4>
                        <p>The AE35 Unit demonstrates the advancement made in robotics in the last few years, and the availability of the everyday person to build and develop their own robots. R-Motion is working in conjunction with the Electrical and Mechanical Technology Departments of Camosun College to showcase the power the college has from turning student innovation into realities.</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="col-xs-4 center">
                    <img src="./images/Team R-Motion.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-4 center">
                    <img src="./images/Team IOTA Energy.jpg" style="max-width: 100%" />
                </div>
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3>Team IOTA Energy</h3>
                        <h4><span>Project:</span>Project Here</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Individual Group Entry -->

            <!-- Individual group Entry - Text right aligned. -->
            <div class="row center_row group_row">
                <div class="col-xs-8 center">
                    <div class="group_description">
                        <h3>Team Down B Technologies</h3>
                        <h4><span>Project:</span>Project Here</h4>
                        <h4><span>Sponsored by:</span><a href="" target="_">Sponsor</a></h4>
                        <p>Summary coming soon!</p>
                        <h3><a href="">View Bio</a></h3>
                    </div>
                </div>
                <div class="col-xs-4 center">
                    <img src="./images/Team Down B Technologies.jpg" style="max-width: 100%" />
                </div>
            </div>
            <!-- End Individual Group Entry -->

        </div>
    </div>

    <div class="scroll sponsors section" id="sponsor_scroll">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section_header_DISABLE">Sponsor information coming soon!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll symposium section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section_header_DISABLE">Symposium Details coming soon!</h1>
                </div>
            </div>

            <!--
            <div class="row group_row">
                <div class="col-md-6">
                    <p>
                        <span class="intro">DATE: </span>
                        <span class="information">June 19, 2014</span>
                    </p>
                    <p>
                        <span class="intro">TIME: </span>
                        <span class="information">9:00AM to 5:00PM</span>
                    </p>
                    <p>
                    <p>
                        <span class="intro">LOCATION: </span>
                            <span class="information">
                                Pacific Forestry Centre<br/>
                                506 Burnside Road West<br/>
                                Victoria, BC
                            </span>
                    </p>
                    <p>Parking is free. There will be signs indicating which parking lot to use. Please proceed to the main entrance of the building to check into the event.</p>
                    <p>Catering provided by <a href="http://www.hotpockets.com/">Hot Pockets</a>.</p>
                </div>
                <div class="col-md-6" style="border-radius: 15px; ">
                    <div style="border-radius: 15px; background: white; text-align: center; height: 475px;">
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21167.92621518904!2d-123.394292!3d48.4567065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548f7307cc7133f1%3A0xd96fcbf84ec80d3b!2sPacific+Forestry+Centre!5e0!3m2!1sen!2s!4v1397617860340" width="525" height="450" frameborder="0" style="border-radius:15px; margin-top: 15px;"></iframe>
                    </div>
                </div>
            </div>
            <div class="row group_row">
                <div class="col-md-12">
                    <h2>Schedule</h2>
                </div>
            </div>
            <div class="row group_row">
                <div class="col-md-6">
                    <div class="group_description">
                        <table class="table table-striped">
                            <h3>Morning</h3>
                            <tr>
                                <th>Time</th>
                                <th>Event</th>
                            </tr>
                            <tr>
                                <td>9:00AM</td>
                                <td>The first thing</td>
                            </tr>
                            <tr>
                                <td>9:15AM</td>
                                <td>The next thing</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group_description">
                        <h3>Afternoon</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Time</th>
                                <th>Event</th>
                            </tr>
                            <tr>
                                <td>1:00PM</td>
                                <td>The first afternoon thing</td>
                            </tr>
                            <tr>
                                <td>2:00PM</td>
                                <td>The next afternoon thing</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>

    <div class="registration section" id="registration">
        <div class="container">

			
			
		<?php
			// database login credentials are stored outside web-facing space.
			// We may have to change this absolute path when the site goes live,
		 
			// Connect to the MySQL server.
		   require ( "credentials.php" );
		 $mailSent = false;

		  // Is registration closed?
		  $dateNow    = strtotime("now");
		  $dateClosed = strtotime("18 June 2014 09:00:00");
		  $tooLate    = ($dateNow > $dateClosed);

			//Initializing 
			$firstName ="";
			$lastName  ="";
			$company   ="";
			$email     ="";
			$phone 	   ="";
			$result	   ="";

		if(isset($_POST['firstname']) && isset($_POST['lastname'])) {

			$firstName = strip_tags($_POST['firstname']);
			$lastName  = strip_tags($_POST['lastname']);
			$company   = strip_tags($_POST['company']);
			$email     = strip_tags($_POST['email']);
			$phone     = strip_tags($_POST['phone']);
		 
			$errors    = null;

			if ($tooLate) { // dealbreaker.  we won't even look at other validations if this one fails.
			  $errors = "Sorry, registration is now closed.  The symposium was held on June 18th, 2014.  See you in 2015!<br/>\r\n";
			} else {  

			  // validate required fields

			  if(empty($firstName)) { 
				$errors .= "Please make sure your <strong>First Name</strong> is filled out.<br/>\r\n";
			  }	

			  if(empty($lastName)) {
				$errors .= "Please make sure your <strong>Last Name</strong> is filled out.<br/>\r\n";
			  }

			  if(empty($email) || !valid_email($email)) {
				$errors .= "Please fill out a valid <strong>E-Mail Address</strong>.<br/>\r\n";
			  }
		 
			}

			if($errors == null) {

		   
			$LinkID = mysql_connect($req_server, $req_username, $req_password);

			// Die if no connect
			if (!$LinkID) {
				die('Could not connect: ' . mysql_error());
			}
			// Choose the DB and run a query.
			mysql_select_db('capjune2014');
			
			
				$query = "select * from reg_tbl where email='$email'";
				//echo $email;
				$result = mysql_query($query);
				if (mysql_num_rows($result))
				{
					$errors .= "This <strong>E-Mail Address</strong> has been registered already. Please contact <a href=\"mailto:cap2014@cs.camosun.bc.ca\">cap2014@cs.camosun.bc.ca</a> if an error has occured. <br/>\r\n";
					//exit();
				}else{
		
				
					// Assemble the SQL query
					$query = "INSERT INTO reg_tbl (first_name, last_name, org_comp_name, email, phone) VALUES ('$firstName', '$lastName','$company','$email', '$phone')";
					// Excute sql query
					$result = mysql_query($query);
					if($result){
						//echo "Register success";
						//$msg = "User Created Successfully.";
					}elseif (!$result) { // If the query returned error, display error the msg
						echo "Could not successfully run query ($query) from DB ";
						//exit;
					}
				}	

				
		  }
			if($errors == null) {	

			// Set up Registration Committee notification email

			// Set up registrant name
			   $name = ""; 
			//if ($title!="") {
			 //    $name .= $title. " ";
			//}
			   $name .= $firstName. " ". $lastName;

			   // Set up message body
			   $data  = "--b1_fce20d8377a30a7c38bd2a920598ae8f
		Content-Type: text/plain; charset = \"UTF-8\"
		Content-Transfer-Encoding: quoted-printable\r\n\r\n";
			   $data .= "New Capstone 2014 Registration:\r\n\r\n";
			   $data .= $name."\r\n";
			   //$data .= "Role: $role\r\n";
			$data .= "Company: $company\r\n";
			$data .= "E-Mail: $email \r\n";

			// Set subject
			$subject = "New Capstone 2014 Registration (" .substr($firstName,0,1). " " .$lastName. ")\r\n";
	
	// Set headers		
	$headers = 'From: capstone2014@cs.camosun.bc.ca' . "\r\n" .
    	           'Reply-To: capstone2014@cs.camosun.bc.ca' . "\r\n" .
    		    'X-Mailer: PHP/' . phpversion()."\r\n".
                  'MIME-Version: 1.0'."\r\n".
                  'Content-Type: multipart/alternative;'."\r\n".
                  '    boundary="b1_fce20d8377a30a7c38bd2a920598ae8f"';
				
       // Send notification email(s) to Registration Committee

	//mail("capstone2014@cs.camosun.bc.ca", $subject, $data, $headers);
      // mail("gerald@codegods.ca", $subject, $data, $headers); 
       $mailSent = true;

       // Set up registrant notification email   

       // Set subject
       $subject = "Camosun College Technologies Capstone 2014 Registration - Confirmation\r\n";
    
       // Set up message body
       $data  = "--b1_fce20d8377a30a7c38bd2a920598ae8f
Content-Type: text/plain; charset = \"UTF-8\"
Content-Transfer-Encoding: quoted-printable


Hello $name!  Thank you for registering for the Camosun College Technologies Capstone Symposium 2014.

The registration details we recorded are:

Name: $name
Company: $company
email: $email

The Symposium will be held at Pacific Forestry Centre, 506 Burnside Road West, Victoria BC. from 9am to 6pm on Wednesday, June 19, 2014.

You will be notified by email if any important schedule changes occur.

If you have any questions, please contact us at capstone2014@cs.camosun.bc.ca.

---------------------------------------------------------------------------------
The Camosun College Technologies Capstone Symposium will be attended by movers and shakers in the tech sector.  This is an opportunity to reach them!  Sponsorship opportunities range from a simple business card ad to a tradeshow booth!  Contact us at cap2014@cs.camosun.bc.ca to learn more...\r\n\r\n
\r\n

--b1_fce20d8377a30a7c38bd2a920598ae8f
Content-Type: text/html; charset = \"UTF-8\"
Content-Transfer-Encoding: quoted-printable
<body style=\"font-family:Segoe UI,Myriad;\">
<p>Hello $name!  Thank you for registering for the Camosun College Technologies Capstone Symposium 2014.</p>
<p>The registration details we recorded are:</p>
<div style=\"margin-left:48px;\">
Name: $name<br>
Company: $company<br>
email: $email<br>
</div>
<p>The Symposium will be held at 
<div style=\"margin-left:48px;\">Pacific Forestry Centre<br>506 Burnside Road West<br>Victoria BC</div>
<br>from 9am to 6pm on Wednesday, June 19, 2014.</p>
<p>You will be notified by email if any important schedule changes occur.\r\n</p>
<p>If you have any questions, please contact us at <a href=\"mailto:capstone2014@cs.camosun.bc.ca\">capstone2014@cs.camosun.bc.ca</a>.</p>
<hr>
<p>The Camosun College Technologies Capstone Symposium will be attended by movers and shakers and up-and-comers 
in the tech sector.  This is an opportunity to reach them!  Sponsorship opportunities range from a simple business 
card ad to a tradeshow booth!  Contact us at <a href=\"mailto:cap2014@cs.camosun.bc.ca\">cap2014@cs.camosun.bc.ca</a> to learn more...</p>
</body>
--b1_fce20d8377a30a7c38bd2a920598ae8f--


";

       // Send registrant notification email      
       mail($email, $subject, $data, $headers);

			} 

		}


		//Validate Email
		function valid_email($email)
		{
			//check formatting of address
			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
				{return false;}
			//Check mail server is up
			else
			{

				//get mail server address
				list($username, $domain) = split("@",$email);
				if(@getmxrr($domain, $mxhost))
					{$connectaddress = $mxhost[0];}
				else
					{$connectaddress = $domain;}

				//check for a connection to mail server
				$connect = @fsockopen($connectaddress, 25);

				if($connect)
					{return true;}
			}

			return false;
		}
		  if(!$mailSent) {    
			if ($tooLate) {
			  echo("<p>Registration is now closed. Thank you for your support of the 2014 Capstone Symposium.</p>");
			}

			if(!empty($errors)) {
			  echo "<p>".$errors."</p>";
			}

		?> 			
            <div class="row">
                <div class="col-md-12">
                   <!-- <h1>Registration coming soon!</h1>-->
                    <p>Are you interested in attending? Please let us know!</p>
                </div>
            </div>			
             <div class="row group_row">
                <div class="group_description col-md-offset-2 col-md-8">
                    <form class="form-horizontal" method='post' action="<?php echo $_SERVER['PHP_SELF'] ?>#registration">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">First Name*:</label>
                            <div class="col-sm-10">
                                <input type="text"  required="required" class="form-control"  name='firstname'  id='firstname' placeholder="First Name" />
                            </div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Last Name*:</label>
                            <div class="col-sm-10">
                                <input type="text" required="required"  class="form-control"  name='lastname' id="lastname" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="organization" class="col-sm-2 control-label">Organization*:</label>
                            <div class="col-sm-10">
                                <input type="text" required="required" class="form-control"  name='company' id="company" placeholder="Organization" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email*:</label>
                            <div class="col-sm-10">
                                <input type="email"  required="required" class="form-control" name='email'  id="email" placeholder="Email Address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Phone #:</label>
                            <div class="col-sm-10">
                                <input type="phone" class="form-control" name='phone' id="phone" placeholder="Phone #" />
                            </div>
                        </div>
                        <button id="reg_button" type='submit' class="btn btn-lg btn-primary">Register</button>
                    </form>

                </div>
				<?php
				  } else { //Registration sent.
				?>
				<div class="row">
					<div class="col-md-12">
						<p>Sent email to : <?php echo $email?></p>
                    	<p>Registration Successful, we look forward to seeing you on June 19th, 2014.</p>
					</div>
				</div>
					
				<?php
				  }
				?> 
            </div>

        </div>
    </div>
    </body>
</html>