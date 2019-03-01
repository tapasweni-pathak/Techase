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
               top:    60px; 
               left:   340px; 
              }
form #Edit2 { position: relative; 
               top:    69px; 
               left:   340px; 
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
<br/>
<div style="position:relative; left:339px; top:53px"><img src="images/gg.jpg" width="250" height="300" /></div>
<div style="position:absolute; left:600px; top:229px"><img src="images/ggc.jpg" width="250" height="300" /></div>



<Form name ="form1" Method ="POST" Action ="fhdakifsmndcmakjd.php">
<div id="Edit1">
<INPUT TYPE = 'VARCHAR'  name ='answer' VALUE ="">
</div>
<div id="Edit2">
<INPUT TYPE = "Submit" Name = "Submit" VALUE = "Submit">
</div>
</FORM>
</body>
</html>
