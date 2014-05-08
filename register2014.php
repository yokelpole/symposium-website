<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

  // database login credentials are stored outside web-facing space.
  // We may have to change this absolute path when the site goes live,
  // ../credentials.php doesn't seem to work in this server configuration.

  // Connect to the MySQL server.
  require ( "credentials.php" );

  $mailSent = false;

  // Is registration closed?
  $dateNow    = strtotime("now");
  $dateClosed = strtotime("18 June 2014 09:00:00");
  $tooLate    = ($dateNow > $dateClosed);

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
	
	
	 // Sanitize inputs for database
       // (not implemented yet and might not be - we're using mysqli prepared statements)
   

       // Add to registration table:

       // Setup mysqli
       //$mysqli = new mysqli($db_host, $db_username, $db_password, "capjune2013");


      // if (mysqli_connect_errno()) {
       //  printf("mysql connection failed: %s\r\n<br>", mysqli_connect_error());
       //  exit;
       //}

       // Setup SQL statement
    //   $sql = "INSERT INTO registration ".
    //          "(title, role, firstName, lastName, company, email, regdate) ".
    //          "values ".
    //          "(?, ?, ?, ?, ?, ?, SYSDATE());";

	
		$query = "select * from reg_tbl where email='$email'";
	  echo $email;

    $result = mysql_query($query);

		if (mysql_num_rows($result)) {
			$errors .= "This <strong>E-Mail Address</strong> has been registered already. Please contact <a href=\"mailto:cap2014@cs.camosun.bc.ca\">cap2014@cs.camosun.bc.ca</a> if an error has occured. <br/>\r\n";
            //exit();
		} else {
		//if (mysql_num_rows($result) >= 1) {
            //email is taken
            //header('location:reg.php?error=email address already registered. please try another one');
		//	$errors .= "This <strong>E-Mail Address</strong> has been registered already. Please contact <a href=\"mailto:cap2014@cs.camosun.bc.ca\">cap2014@cs.camosun.bc.ca</a> if an error has occured. <br/>\r\n";
         //   exit();
		//}	
		
			// Assemble the SQL query
			$query = "INSERT INTO reg_tbl (first_name, last_name, org_comp_name, email, phone) VALUES ('$firstName', '$lastName','$company','$email', '$phone')";
			// Excute sql query
			$result = mysql_query($query);
			if ($result) {
				//echo "Register success";
				//$msg = "User Created Successfully.";
			} elseif (!$result) { // If the query returned error, display error the msg
				echo "Could not successfully run query ($query) from DB ";
				//exit;
			}
		}	
				
    // Insert the record
    // if ($prepared = $mysqli->prepare($sql)) {
    //   $prepared->bind_param("ssssss", $title, $role, $firstName, $lastName, $company, $email);
  	//			 if (!$prepared->execute()) {
  	//					if ($prepared->errno == "1062") {
  	//						$errors .= "This <strong>E-Mail Address</strong> has been registered already. Please contact <a href=\"mailto:cap2014@cs.camosun.bc.ca\">cap2014@cs.camosun.bc.ca</a> if an error has occured. <br/>\r\n";
  	//				}
  	//		 }
    //     $prepared->close();
    //   } else {
    //     printf("Error in prepared statement: %s\r\n<br>",$mysqli->error);
    //   }
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
  }
?> 