<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
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
	 p #edit {
		   position: relative;
		   left:  300px;		
	         }
	       p {
		   position: relative;
		   left:  300px;		
	         }		
</style>
<br/>
<br/>
<br/>
<br/>
<font size="7" face="arial" color="#FF9900">
<div id="edit">
<p><b><a href="logout.php"><div style="position:absolute; left:740px; top:234px;"><img src="images/logout.jpg"/></div></a></b></p>
</div>
</font>
<font size="5" face="arial" color="#FF9900">
<p>THANKS FOR PARTICIPATING! :)! </p>
<p> YOU CROSSED ALL THE LEVELS :)!</p>

<br/>
<br/>
<p><i>For further any queries, drop us a mail at : techase_tremors@gmail.com </i></p>
</font>
</body>
</html>