<?php
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
  	
  		$query = "select * from reg_tbl where email='$email'";

      $result = mysql_query($query);

  		if (mysql_num_rows($result)) {
  			$errors .= "This <strong>E-Mail Address</strong> has been registered already. Please contact <a href=\"mailto:capstone2014@cs.camosun.bc.ca\">capstone2014@cs.camosun.bc.ca</a> if an error has occured. <br/>\r\n";
		  } else {
  			// Assemble the SQL query
  			$query = "INSERT INTO reg_tbl (first_name, last_name, org_comp_name, email, phone) VALUES ('$firstName', '$lastName','$company','$email', '$phone')";
  			// Excute sql query
  			$result = mysql_query($query);
  			if ($result) {
  				//echo "Register success";
  				//$msg = "User Created Successfully.";
  			} elseif (!$result) { 
          // If the query returned error, display error the msg
  				$errors .= "Could not successfully run query ($query) from DB ";
  				//exit;
  			}
		  }	
    }
  }

  if($errors != null) {
    // If there are errors then return them to the user.
    echo $errors;
    return;
  }

  if($errors == null) {	
    // Set up Registration Committee notification email
  	// Set up registrant name
    $name = ""; 
    $name .= $firstName. " ". $lastName;

    // Set up message body
  	// Set subject
  	$subject = "New Capstone 2014 Registration (" .substr($firstName,0,1). " " .$lastName. ")\r\n";

    // Set headers		
    $headers =  'From: capstone2014@cs.camosun.bc.ca' . "\r\n" .
    	          'Reply-To: capstone2014@cs.camosun.bc.ca' . "\r\n" .
        		    'X-Mailer: PHP/' . phpversion()."\r\n".
                'MIME-Version: 1.0'."\r\n";
  		
     // Send notification email(s) to Registration Committee
     $mailSent = true;

     // Set up registrant notification email   
     // Set subject
     $subject = "Camosun College Technologies Capstone 2014 Registration - Confirmation\r\n";

     // Set up message body
     $data  = "
              Hello $name!  Thank you for registering for the Camosun College Technologies Capstone Symposium 2014.

              The registration details we recorded are:

              Name: $name
              Company: $company
              email: $email

              The Symposium will be held at Pacific Forestry Centre, 506 Burnside Road West, Victoria BC. from 9am to 6pm on Wednesday, June 19, 2014.

              You will be notified by email if any important schedule changes occur.

              If you have any questions, please contact us at capstone2014@cs.camosun.bc.ca.
              ";

    // Send registrant notification email      
    mail($email, $subject, $data, $headers);
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