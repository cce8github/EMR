<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMR System</title>

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}


/* ~~ Element/tag selectors ~~ */
ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; 
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background: #6F7D94;
        align:center;
}

.sidebar1 {
	float: left;
	width: 20%;
	background: #93A5C4;
	padding-bottom: 10px;
        margin-bottom: 15px
}
.content {
	padding: 10px 0;
	width: 80%;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #6F7D94;
	color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background: #6F7D94;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
        margin-right: -1px;
        border-top: 1px solid #666;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->

</head>

<body>

<div class="container">


<div class="header2"><img src="http://www.uhhospitals.org/portals/_default/images/university-hospitals.jpg" alt="Insert Logo Here" name="Insert_logo" id="Insert_logo" style="background: #8090AB; display:block;" />

</div>


<!div class="sidebar1">
   <ul>
<h3 align = "left"><b> MEDICAL INTENSIVE </b></h3>
 <h3 left: 250px><b> CARE UNIT </b></h3>
<h5>Form No. 70231 (R5/11)</h5>
</ul>
<!/div>


<div class="sidebar1">
    <ul class="nav">
  
	  </ul>
</div>


<div class="content">

        
<form id="form1" name="session1" method="POST" action="EMRdata.php">
  <table width="400" border="1" style=" top:500px; left:200px;" align:center>
    <tr>
      <td><b><label>Below are the Patient Files to Be Processed.</label></b>&nbsp;</td></td>
    </tr>
    <tr>
      <td>&nbsp;

 <?php
//Generating the Password.
$username = $_POST['logon1'];
$password1 = $_POST['logon2'];
$password = "0x".strtoupper(hash('sha1', $_POST['logon2']));
//echo "<b>".$password."Testing #########.";

//#############################
// User Authentication
$userFile = "/home1/chikasit/public_html/myprojects/EMR/users.txt";
$fp = file($userFile);
$i=1; 
$logon = "";
$users = "";
$userspwd = "";
while($fp[$i]<>'') { 
   $contents = $fp[$i];    
   $user = explode("\t", $fp[$i]);
   $users = $users."\t".$user[1];
   $userspwd = $userspwd."\t".$user[2];
   $logon = $logon."\t".$user[1].$user[2];

  $i++;
} 
$users = $username.$password;
$pos = strpos($logon, $users);
if ($pos !== false && $username != "" && $password1 != "") {

//#########################


//Counting the files in a directory.
$dir    = "/home1/chikasit/public_html/myprojects/EMR/";
$files = array_diff(readdir(opendir($dir)), array('..', '.'));

                 //$dir = ".";
 
                 $dh = opendir($dir);
$num=1;
                 while (($file = readdir($dh)) !== false) {
                    $pos = strpos($file, "ID");
                    //if($pos !== false) {
                    if($file != "." && $file != ".." && $pos !== false) {
                       //echo "<A HREF=\"$file\">$file</A><BR>\n";
                      echo "<ol>";
                       //echo $num.". <A HREF=\"EMRdata.php\">$file</A><BR>\n";
                       $fileData = $file."/".$password;
                       echo $num.". <a href=\"EMRdata.php?varname=$fileData\">$file</a></A><BR>\n";
                       
                      echo "</ol>";
                     
$num++;
                    }
                 }

                 closedir($dh);
}else{

echo "<b>"."Invalid Username or Password. Try to Login Again.";
echo "<p>";
echo "<p>";
echo "<p>";
}

               ?>
</td>
</tr>
<td><label>Select the Patient File to Proceed
</label>&nbsp;</td></td>
</table>
</form>


</div>

<div "Footer" style=" top:700px; left:200px;">

<br />

<p></p>
</div>

<hr>
.......<a href="index.html"><b>Go Back to Login Page </b></a></div>

</body>
</html>