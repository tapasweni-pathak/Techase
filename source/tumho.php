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
mysql_query(" UPDATE  member SET url = 'tumho.php'
 WHERE username = '$username' ") or die('Unable to update members URL: ' . mysql_error());
mysql_query( "INSERT INTO rank (username, url,userdatetime) 
	VALUE ( '$username','tumho.php',NOW() )   ") 
or die('Unable to update members URL: ' . mysql_error());
?>


<?php

require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}


 mysql_connect("localhost", "tapasweni", "tapasweni") or die(mysql_error()); 
mysql_select_db("simplelogin") or die(mysql_error()); 
  




?>
<html>

<body>
<img src="banner.jpg" width="500" height="70" />
</head>
<style type="text/css">
body {background-image:url('stareffect.jpg');}
</style>
</head>
<style type="text/css">
	 h1 {
		position: relative;
		left:  480px;		
	    }	
form #Edit1 { position: relative; 
               top:    58px; 
               left:   341px; 
              }
form #Edit2 { position: relative; 
               top:    67px; 
               left:   341px; 
              }
      
</style>

<hr/>
<br/>
<a href="forum.php"><div style="position:absolute; left:347px; top:165px;"><img src="images/forum.jpg"/></div></a>
<a href="credits.php"><div style="position:absolute; left:481px; top:165px;"><img src="images/credits.jpg"/></div></a>
<a href="rules.php"><div style="position:absolute; left:615px; top:165px;"><img src="images/rules.jpg"/></div></a>
<a href="logout.php"><div style="position:absolute; left:740px; top:165px;"><img src="images/logout.jpg"/></div></a>
<br/>
<br/>
<font size="5" face="calibri" color="green">
<p>url</p>

<br/>
<br/>
<Form name ="form1" Method ="POST" Action ="checkninth.php">
<div id="Edit1">
<INPUT TYPE = 'VARCHAR'  name ='answer' VALUE ="">
</div>
<div id="Edit2">
<INPUT TYPE = "Submit" Name = "Submit" VALUE = "Submit">
</div>
</FORM>
</body>
</html>

