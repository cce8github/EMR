<html>

<head>

<title>EMR - Bedside Flow Sheet</title>
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
$fileData1 = $_GET['varname'];
$fileData = explode("/",$fileData1);
$myValues = $fileData[0];
$myUser = $fileData[1];
//echo "<b>".$fileData1."Testing #########.";

echo "<p>";
echo "<p>";

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

echo "<p>";

// Calculating the Hourly Data from the Mins Data
$fp = file($myFile);
$i=4; 
$sum1 = 0;$sum2 = 0;$sum3 = 0;$sum4 = 0; $content = ""; $form_content = ""; $col = "";
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
echo "\t";
$xx = "$data[0]";
 
$HourData1 = round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\n";

echo "<p>";
$line=4;

$data = explode("\t",$lines[$line]);
$num = count($data);
$row++;$line++;
        
?>
<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:5px; left:750px; background-color:transparent;">
<br><?php echo " <a href=\"EMRdata.php?varname=$myFile\"><b>Previous Page</b></a></A>";?><br>
<br><?php echo " <a href=\"EMRDirList2.php?\"><b>Select Another File</b></a></A>";?>
<br><br><?php echo " <a href=\"index.html?\"><b><h3>Log Out<h3><b></a></A>";?>
</div>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:180px; left:750px;">
<table><tr><td>
<input value="Print Data" name="PrintSubmitButton" id="PrintSubmitButton" type="button" onclick="formPrint();releaseDirtyFlag
();setTimeout('SubmitButton.click()',1000);"> 
</td></tr></table>
</div>


<img id='BGImage' src="" border="3" style="position: absolute; left: 5px; height:883; top: 220px; width:870px">

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:230px; left:15px; background-color:transparent;">
<?php  //This prints the minutes data on the e-flowsheet. 
$submitData1 = $text_line2[1]."=".$value1."=".$value2."=".$value3."=".$value4."=".$value5;
$submitData = $fileData1."/".$submitData1;
//echo $submitData;

echo " <p> <a href=\"EMRSubmit.php?varname=$submitData\"><b>Submit This Hourly Data</a></A>";
echo " <p> <a href=\"EMRSubmitAll.php?varname=$fileData1\">Submit All Hourly Data</b></a></A>";
?>
<td><td><p><b> Click One of the Buttons to Submit Data</b>
</div>

<form method="post" action="EMRSubmit.php?"  name="FormName" id="FormName" >

<input name="appt_date" id="appt_date" type="text" class="noborder" value ="<?php echo "Record Date: ".$text_line2[1];?> " style="position:absolute; left:475px; top:10px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=appt_date>


<input name="patient_name" id="patient_name" type="text" class="noborder" value ="<?php echo "Patient Name: ".$text_line1[1];?> " style="position:absolute; left:475px; top:33px; width:157px; height:19px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=patient_name>


<input name="patient_id" id="patient_id" type="text" class="noborder" value = "<?php echo "Patient ID: ".$text_line1[1];?> " style="position:absolute; left:475px; top:65px; width:157px; height:17px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" oscarDB=patient_id>


<input name="age" id="age" type="text" class="noborder" value ="<?php echo "Bed Number: ".$text_line3[1];?>" style="position:absolute; left:475px; top:95px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=age>


<input name="m$HT#value" id="m$HT#value" type="text" class="noborder" style="position:absolute; left:475px; top:120px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">


<input name="m$WT#value" id="m$WT#value" type="text" class="noborder" style="position:absolute; left:475px; top:150px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">

<?php $top = "230px"; $height = "25px"; $width = "120px"; $start1 = "319px"; $start2 = "439px"; $start3 = "559px"; $start4 = "679px"; $start5 = "799px"; ?>

<input name="m$BP07#value" oscarDB=m$BP07#value id="m$BP07#value" type="text" class="noborder" value = "Time(HH:MM:SS) " style="position:absolute; left:<?php echo $start1;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:15px; text-align:center; background-color:transparent;" value="">

<?php $top = "230px"; $height = "25px"; $width = "120px"; $start1 = "439px"; $start2 = "439px"; $start3 = "559px"; $start4 = "679px"; $start5 = "799px"; $fontwt = "900";?>

<input name="m$BP07#value" oscarDB=m$BP07#value id="m$BP07#value" type="text" class="noborder" value = "<?php echo $value1;?>" style="position:absolute; left:<?php echo $start1;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:<?php echo $fontwt;?>; font-size:15px; text-align:center; background-color:transparent;" value="">


<?php $top = "275px"; $height = "25px"; $width = "120px"; $start1 = "319px"; $start2 = "439px"; $start3 = "559px"; $start4 = "719px"; $start5 = "799px";?>


<h3><b><input name="m$BP08#value" oscarDB=m$BP08#value id="m$BP08#value" type="text" class="noborder" value = "HR(BPM)" style="position:absolute; left:<?php echo $start1;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:15px; text-align:center; background-color:transparent;" value=""></b></h3>


<input name="m$BP09#value" oscarDB=m$BP09#value id="m$BP09#value" type="text" class="noborder" value = "RR(breath/min) " style="position:absolute; left:<?php echo $start2;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:15px; text-align:center; background-color:transparent;" value="">


<input name="m$BP10#value" oscarDB=m$BP10#value id="m$BP10#value" type="text" class="noborder" value = "EndTidal CO2(mmHg)" style="position:absolute; left:<?php echo $start3;?>; top:<?php echo $top;?>; width:160px; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:15px; text-align:center; background-color:transparent;" value="">


<input name="m$BP10#value" oscarDB=m$BP10#value id="m$BP10#value" type="text" class="noborder" value ="BP(S/D(mmHg))"  style="position:absolute; left:<?php echo $start4;?>; top:<?php echo $top;?>; width:150px; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:15px; text-align:center; background-color:transparent;" value="">



<?php $top = "320px";$height = "20px"; $width = "80px"; $start1 = "335px"; $start2 = "470px"; $start3 = "590px"; $start4 = "710px"; $start5 = "830px"; $color = "transparent";$align = "center";    ?>

<input name="m$HR07#value" oscarDB=m$HR07#value id="m$HR07#value" type="text" class="noborder" value = "<?php echo $value2;?> " style="position:absolute; left:<?php echo $start1;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:<?php echo $fontwt;?>; font-size:12px; text-align:<?php echo $align;?>; background-color:<?php echo $color;?>;" value="">


<input name="m$HR08#value" oscarDB=m$HR08#value id="m$HR08#value" type="text" class="noborder" value = "<?php echo $value3;?> " style="position:absolute; left:<?php echo $start2;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:<?php echo $fontwt;?>; font-size:12px; text-align:<?php echo $align;?>; background-color:<?php echo $color;?>;" value="">


<input name="m$HR09#value" oscarDB=m$HR09#value id="m$HR09#value" type="text" class="noborder" value = "<?php echo $value4;?> " style="position:absolute; left:<?php echo $start3;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:<?php echo $fontwt;?>; font-size:12px; text-align:<?php echo $align;?>; background-color:<?php echo $color;?>;" value="">


<input name="m$HR10#value" oscarDB=m$HR10#value id="m$HR10#value" type="text" class="noborder" value = "<?php echo $value5;?>" style="position:absolute; left:<?php echo $start4;?>; top:<?php echo $top;?>; width:<?php echo $width;?>; height:<?php echo $height;?>; font-family:sans-serif; font-style:normal; font-weight:<?php echo $fontwt;?>; font-size:12px; text-align:<?php echo $align;?>; background-color:<?php echo $color;?>;" value="">

<?php $align = "right";?>
<table border="3" style="position: absolute;left: 100px;  height:intElemOffsetHeight; top: 360px;width: 700; align:right;">

<tr><td><b>Data By Minutes</td>
<td><b>HR(BPM)</td>
<td><b>RR(breath/min) </td>
<td><b>EndTidal CO2(mmHg)</td>
<td><b>BP(S/D(mmHg))</td></tr>
<tr></tr><tr></tr> <tr><td>

<?php echo $content;  //This prints the minutes data on the e-flowsheet. 
?>

</td> </tr> </table>
</form>
</div>


</body>

</html>