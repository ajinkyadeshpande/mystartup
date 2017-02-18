<?php
include('config.php');

$tbl_name="registered_members"; // Table name


// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$mypassword=md5($mypassword);
// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count=="1"){
	//print "Count: "+$count;
//exit(0);
// Register $myusername, $mypassword and redirect to file "login_success.php"
$rows=mysqli_fetch_array($result);
$id= $rows['id'];
$uid= $rows['uid'];
$uname= $rows['name'];
$gender= $rows['gender'];
$dob= $rows['dob'];
$fbid= $rows['fbid'];
$linkid= $rows['linkid'];
$gplus= $rows['gplus'];
$twitter= $rows['twitter'];
$profilepic= $rows['profilepic'];
$mycountry= $rows['country'];
$myresume= $rows['resume'];
$_SESSION["id"];
$_SESSION["myusername"];
$_SESSION["uid"];
$_SESSION["gender"];
$_SESSION["dob"];
$_SESSION["myresume"];
$_SESSION["mycountry"];
$_SESSION["uname"];
$_SESSION["fbid"];
$_SESSION["linkid"];
$_SESSION["gplus"];
$_SESSION["twitter"];
$_SESSION["profilepic"];

/*
session_register("id");
session_register("myusername");
session_register("uid");
session_register("gender");
session_register("dob");
session_register("myresume");
session_register("mycountry");
session_register("uname");
session_register("fbid");
session_register("linkid");
session_register("gplus");
session_register("twitter");
session_register("profilepic");*/
header("location:production/profile.html");
}
else {
echo "Wrong Username or Password"."<BR/><BR/><BR/><BR/>";
}

?>


<HTML>
<BODY>

<A HREF="index.html">Click here for Homepage</a>

</BODY>
</HTML>