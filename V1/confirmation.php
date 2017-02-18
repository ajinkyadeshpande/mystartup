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
	<div id="page" class="container">
		
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Email ID Confirmation</a></h2>
				<div class="entry">
					
          <p class="infopost">&nbsp;</p>
          
		
		 <div class="l1">

<?php

include('config.php');
// Passkey that got from link
$passkey=$_GET['passkey'];

$tbl_name1="temp_members_db";

// Retrieve data from table where row that match this passkey
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
$result1=mysqli_query($link, $sql1);

// If successfully queried
if($result1){

// Count how many row has this passkey
$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysqli_fetch_array($result1);
$uid=$rows['uid'];
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$country=$rows['country'];
$gender=$rows['gender'];
$dob=$rows['dob'];

$tbl_name2="registered_members";

// Insert data that retrieves from "temp_members_db" into table "registered_members"
$sql2="INSERT INTO $tbl_name2(uid, name, email, password, country, gender, dob)VALUES('$uid','$name', '$email', '$password', '$country', '$gender', '$dob')";

$result2=mysqli_query($link, $sql2);


}
}
// if not found passkey, display message "Wrong Confirmation code"
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";

// Delete information of this user from table "temp_members_db" that has this passkey
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysqli_query($link, $sql3);

}

?>

<br><br>

<A HREF="../index.php">Click here for Homepage</a>
        </br></br>             
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