<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyStartup | Signed up</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
		
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Signed Up Successfully ! </a></h2>
				<div class="entry">
					
          <p class="infopost">&nbsp;</p>
          
		
		 <div class="l1">

If any issue Persists please feel free to contact us at:
<a href="mailto:info@adcorporations.com">info@adcorporations.com</a>

<br/><br/>

<?php

include('config.php');


// table name
$tbl_name=temp_members_db;

// Random confirmation code
$confirm_code=md5(uniqid(rand()));

// values sent from form
//$uid=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['password'];
/*$country=$_POST['country'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['demo1'];*/
$encpass=md5($password);

// Insert data into database
$sql="INSERT INTO $tbl_name(confirm_code, uid, name, email, password, country, gender, dob)VALUES('$confirm_code', '1', '2', '$email', '$encpass', '2', '2', '2')";
$result=mysqli_query($link,	$sql);

// if suceesfully inserted data into database, send confirmation link to email
if($result){

// ---------------- SEND MAIL FORM ----------------


// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link for MyStartup is here";

// From
$header="from: MyStartup<info@localhost.com>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://"." $url"."/confirmation.php?passkey=$confirm_code";


// send email
$sentmail = mail($to,$subject,$message,$header);

}


// if not found
else {
echo "Not found your email in our database";
}


// if your email succesfully sent
if($sentmail){
echo "Your Account has been created !! Your Confirmation link Has Been Sent To Your Email Address. It might take 12 hrs to reach your mail !!"."<BR/><BR/><BR/><BR/>";
echo "<b>"."You will find this mail Probably in SPAM"."</b><BR/><BR/>";
}
else {
echo "Cannot send Confirmation link to your e-mail address"."<BR/><BR/><BR/><BR/>";
}

?>


<A HREF="index.html">Click here for Homepage</a>
                     
                     <!-- Clean   -->
                     
		 </div>
		 
        <div class="post_content">        
		
        </div>
		
	    <div class="clr"></div>	    </div>
	    <div class="clr"></div>    
        <div class="clr"></div>
	  
<div class="mainbar">
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<div>
                  <h1><i class="fa fa-paw"></i> MyStartup</h1>
                  <p>©2016 All Rights Reserved. MyStartup</p>
                </div>
              </div>
            
          
    
  </body>
</html>