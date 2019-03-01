<?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
 


 mysql_connect("localhost", "tapasweni", "tapasweni") or die(mysql_error()); 
mysql_select_db("simplelogin") or die(mysql_error()); 

$data = mysql_query("SELECT * FROM member") 
	or die(mysql_error()); 
	while($info = mysql_fetch_array( $data ))
	{
		//Print $info['username'] ;
		if($info['username']==($fgmembersite->UserName('username')))
		{
$_SESSION['username']=$info['username'];
			$username=$_SESSION['username'];

			break;
		}
	}
$answer = $_POST['answer'];


if ($answer == "kochituskers") {
mysql_query(" UPDATE  member SET url = 'six.php'
 WHERE username = '$username' ") or die('Unable to update members URL: ' . mysql_error());
mysql_query( "INSERT INTO rank (username, url,userdatetime) 
	VALUE ( '$username','six.php',NOW() )   ") 
or die('Unable to update members URL: ' . mysql_error());
Header("Location: six.php");
}
else {
Header("Location: five.php");
}

?>