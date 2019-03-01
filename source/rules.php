<?php
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
	 p {
		position: relative;
		left:  150px;		
	    }	
</style>
<font size="6" face="arial" color="#FF9900">
<p><b>RULES</b></p>
</font>
<font size="4" face="arial" color="#FF9900">
<p>1. Spaces are not allowed in the answer</p>
<p>2. Only alphabets are allowed in the answer</p>
<p>3. Answers should be written in the characters having ASCII value between 97-122</p>
<p>4. Try to get the answer from the hints provided int the source code of the respective pages</p>
<p>5. Do not try to tamper the website</p>
<p>6. Do not try any unfair means to get the answer or to win the event,</p>
<p>   since winning the event with fair means will give you internal satisfaction at the end</p>
<p>7. Strictly follow the above mentioned rules</p>	
</font>
</body>
</html>