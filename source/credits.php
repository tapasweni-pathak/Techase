<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<html>
<body bgcolor="#000000">
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
<font size="7" face="arial" color="#FF9900">
<div id="edit">
<p><b>CREDITS</b></p>
</div>
</font>
<font size="5" face="arial" color="#FF9900">
<p>1. Pooja Gupta</p>
<p>2. Shalini Sheoran</p>
<p>3. Tapasweni Pathak</p>
<br/>
<br/>
<p><i>For further any queries, drop us a mail at : techase_tremors@gmail.com </i></p>
</font>
</body>
</html>