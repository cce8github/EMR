<html>

<head>

<title>EMR Bedside Flow Sheet</title>
<style type="text/css" media="print">
/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

 .DoNotPrint {
     display: none;
 }
 .noborder {
     border : 0px;
     background: transparent;
     scrollbar-3dlight-color: transparent;
     scrollbar-3dlight-color: transparent;
     scrollbar-arrow-color: transparent;
     scrollbar-base-color: transparent;
     scrollbar-darkshadow-color: transparent;
     scrollbar-face-color: transparent;
     scrollbar-highlight-color: transparent;
     scrollbar-shadow-color: transparent;
     scrollbar-track-color: transparent;
     background: transparent;
     overflow: hidden;
 }
 </style>

<script language="javascript">
function formPrint(){
            window.print();
} 
</script>

<!-- scripts to confirm closing of window if it hadn't been saved yet -->
<script language="javascript">
//keypress events trigger dirty flag
var needToConfirm = false;
document.onkeyup=setDirtyFlag;
function setDirtyFlag(){
        needToConfirm = true;
}
function releaseDirtyFlag(){
        needToConfirm = false; //Call this function if doesn't requires an alert.
//this could be called when save button is clicked
}
window.onbeforeunload = confirmExit;
function confirmExit(){
     if (needToConfirm){
         return "You have attempted to leave this page. If you have made any changes to the fields without clicking the Save button, your changes 

will be lost. Are you sure you want to exit this page?";
     }
}
var intElemOffsetHeight = document.getElementById(id_attribute_value).offsetHeight;

</script>

<script language="JavaScript">
     top.window.moveTo(0,0);
     if (document.all) {
     top.window.resizeTo(screen.availWidth,screen.availHeight);
     }
     else if (document.layers||document.getElementById) {
     if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){
         top.window.outerHeight = screen.availHeight;
         top.window.outerWidth = screen.availWidth;
    }
}
 </script>

</head>

<body onload="">
<div class="container">


<div class="header"><img src="http://www.uhhospitals.org/portals/_default/images/university-hospitals.jpg" alt="Insert Logo Here" name="Insert_logo" id="Insert_logo" style="background: #8090AB; display:block;" />

</div>


<div class="sidebar1">
   <ul>
<h3 align = "left"><b> MEDICAL INTENSIVE </b></h3>
 <h3 left: 250px><b> CARE UNIT </b></h3>
</ul>
</div>

Form No. 70231 (R5/11)

<div class="content">
<img id='BGImage' src="" border="3" style="position: absolute; left: 5px; height:213; top: 5px; width:870px">
<?php 
header("Content-Type: text/plain");
$fileData2 = $_GET['varname'];
$fileData = explode("/",$fileData2);
$myValues = $fileData[0];
$myUser = $fileData[1];
$submitData = $fileData[2];

//For rounded values
// Sample of the values  08:00:0088144032IDMins.txt
$value1 = substr($myValues, 0, 8);
$value2 = substr($myValues, 8, 2);
$value3 = substr($myValues, 10, 2);
$value4 = substr($myValues, 12, 2);
$value5 = substr($myValues, 14, 2);
$myFile = substr($myValues, 16);
echo "<p>";
echo "<p>";
$lines = file($myFile);//file in to an array
$number = count($lines);
$text_line1 = $lines[0];
$text_line1 = explode("\t",$text_line1);
$text_line2 = $lines[1];
$text_line2 = explode("\t",$text_line2);
$text_line3 = $lines[2];
$text_line3 = explode("\t",$text_line3);

// Calculating the Hourly Data from the Mins Data
$fp = file($myFile);
$i=4; 
$sum1 = 0;$sum2 = 0;$sum3 = 0;$sum4 = 0; $content = ""; $col = "";
while($fp[$i]<>'') { 
   $contents = $fp[$i]; 
   $data = explode("\t", $fp[$i]); 
   
   // Calculating the Hourly Data from the Mins Data
   $sum1 = $sum1+$data[1];$sum2 = $sum2+$data[2];$sum3 = $sum3+$data[3];$sum4 = $sum4+$data[4];
   $content = $content."<b>$data[0]"."<td>".$data[1]."<td>".$data[2]."<td>".$data[3]."<td>".$data[4]."<tr>"."<td>";
   $col = $col.$data[0]."<br/>"."<br/>";
$i++;
}  

$cnt = ($i-4);
$hour = substr($data[0], 0,2);
$Hourly1 = $sum1/$cnt;$Hourly2 = $sum2/$cnt;$Hourly3 = $sum3/$cnt;$Hourly4 = $sum4/$cnt;
$HourData = "$data[0]\t".round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\t".$myFile."\n";
//echo " <p> <a href=\"EMRform.php?varname=$HourData\">$data[0]</a></A>";
 echo "\t";
$xx = "$data[0]";
 
$HourData1 = round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\n";
//echo "<p> $HourData1";
//<br><?php echo " <a href=\"EMRform.php?varname=$myValues\"><b>Previous Page</b></a></A>";
?>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:60px; left:750px; background-color:transparent;">
<?php echo " <a href=\"EMRDirList2.php?\"><b>Select Another File</b></a></A>";?>
</div>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:80px; left:750px; background-color:transparent;">
<?php echo " <a href=\"index.html?\"><b><h3>Log Out<h3><b></a></A>";?>
</div>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:180px; left:750px;">
<table><tr><td>
<input value="Print Data" name="PrintSubmitButton" id="PrintSubmitButton" type="button" onclick="formPrint();releaseDirtyFlag
();setTimeout('SubmitButton.click()',1000);"> 
</td></tr></table>
</div>

<img id='BGImage' src="" border="3" style="position: absolute; left: 5px; height:883; top: 220px; width:870px">

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:210px; left:100px; background-color:transparent;">
<p><b><h3></h3></b>
</div>

<!form method="post" action="EMRDirList2.php?"  name="FormName" id="FormName" >
<form method="post" action=""  name="FormName" id="FormName" >

<input name="appt_date" id="appt_date" type="text" class="noborder" value ="<?php echo "Record Date: ".$text_line2[1];?> " style="position:absolute; left:475px; top:10px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=appt_date>


<input name="patient_name" id="patient_name" type="text" class="noborder" value ="<?php echo "Patient Name: ".$text_line1[1];?> " style="position:absolute; left:475px; top:33px; width:157px; height:19px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=patient_name>


<input name="patient_id" id="patient_id" type="text" class="noborder" value = "<?php echo "Patient ID: ".$text_line1[1];?> " style="position:absolute; left:475px; top:65px; width:157px; height:17px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" oscarDB=patient_id>


<input name="age" id="age" type="text" class="noborder" value ="<?php echo "Bed Number: ".$text_line3[1];?>" style="position:absolute; left:475px; top:95px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=age>


<input name="m$HT#value" id="m$HT#value" type="text" class="noborder" style="position:absolute; left:475px; top:120px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">


<input name="m$WT#value" id="m$WT#value" type="text" class="noborder" style="position:absolute; left:475px; top:150px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">

<?php $top = "230px"; $height = "25px"; $width = "120px"; $start1 = "319px"; $start2 = "439px"; $start3 = "559px"; $start4 = "679px"; $start5 = "799px"; ?>

<table border="3" style="position: absolute;left: 100px;  height:intElemOffsetHeight; top: 260px;width: 700; align:right;">

<tr><td><b>Record Date</td>
<td><b>Record Time</td>
<td><b>HR(BPM)</td>
<td><b>RR(breath/min) </td>
<td><b>EndTidal CO2(mmHg)</td>
<td><b>BP(S/D(mmHg))</td></tr>
<tr></tr><tr></tr> <tr><td>

<?php 
//Generating the Final Data from the php Get URL Varname.
$data = explode("=", $submitData);
$content = "$data[0]"."<td>".$data[1]."<td>".$data[2]."<td>".$data[3]."<td>".$data[4]."<td>".$data[5]."<td>".$data[6]."<tr>"."<!td>";
echo $content;
$Dat = date(DATE_ATOM);
$contentx = "$data[0]"."\t".$data[1]."\t".$data[2]."\t".$data[3]."\t".$data[4]."\t".$data[5]."\t".$data[6].$fileData[1]."\t".$Dat."\n";

//Building HTTP Post Querries with params.
$params = array('patientID' => $text_line1[1], 'bedID' => $text_line3[1], 'recdate' => $data[0], 'rectime' => $data[1], 'HR'=> $data[2], 'RR' => $data[3], 'EndTidal' => $data[4], 'BP' => $data[5], 'User' => $fileData[1], 'SubmitDateTime' => $Dat);
$query = http_build_query ($params);
//echo $query;
//echo " <p> <a href=\"EMRFinal.php?varname=$query\">Proceed to Submit</a></A>";
 

//Generating and Saving the Data Values to a file
$fp = fopen('EMROutput.txt', 'a');
fwrite($fp, $contentx);
fclose('EMROutput.txt');
?>
</td> </tr> </table>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:300px; left:100px;">
<p><b><h3></h3></b><br>
<?php echo " <p> <a href=\"index.html\"><b><h3><h3><b></a></A>";
echo " <p> <a href=\"EMRFinal.php?varname=$query\"><h4>Proceed to Submit<h4></a></A>";
?>
</div>

</form>
</div>
</body>
</html>