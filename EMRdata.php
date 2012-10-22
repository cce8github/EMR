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
<img id='BGImage' src="" border="3" style="position: absolute; left: 5px; height:213; top: 5px; width:870px">

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
<!img id='BGImage' src="" border="3" style="position: absolute; left: 175px; height:480; 10top: 0px; width:700px">
<form method="post" action="EMRform.php?varname="EMRdata.txt""  name="FormName" id="FormName" >

<?php
 
//Generating the Header Details e.g. Patient ID, Bed Numbers, etc.
header("Content-Type: text/plain");
$fileData = $_GET['varname'];
$fileData = explode("/",$fileData);
$myFile = $fileData[0];
$myUser = $fileData[1];
//echo $myUser;
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
?>

<img id='BGImage' src="" border="3" style="position: absolute; left: 5px; height:883; top: 220px; width:870px">

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:20px; left:750px; background-color:transparent;">
<?php echo " <a href=\"EMRDirList2.php?\"><b>Previous Page</b></a></A>";?>
<br><?php echo " <a href=\"index.html?\"><b><h3>Log Out<h3><b></a></A>";?>
</div>

<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:180px; left:750px;">
<table><tr><td>
<input value="Print Data" name="PrintSubmitButton" id="PrintSubmitButton" type="button" onclick="formPrint();releaseDirtyFlag
();setTimeout('SubmitButton.click()',1000);"> 
</td></tr></table>
</div>

<br><br>
<div class="DoNotPrint" id="BottomButtons" style="position: absolute; top:230px; left:100px; background-color:transparent;">
<?php echo " <b>Click on the Hours Below to View the Minutes Data / Submit Data.</b><tr>";?>
<br>
</div>


<form method="post" action="EMRform.php?varname="EMRdata.txt""  name="FormName" id="FormName" >

<input name="appt_date" id="appt_date" type="text" class="noborder" value ="<?php echo "Record Date: ".$text_line2[1];?> " style="position:absolute; left:475px; top:10px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=appt_date>


<input name="patient_name" id="patient_name" type="text" class="noborder" value ="<?php echo "Patient Name: ".$text_line1[1];?> " style="position:absolute; left:475px; top:33px; width:157px; height:19px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=patient_name>


<input name="patient_id" id="patient_id" type="text" class="noborder" value = "<?php echo "Patient ID: ".$text_line1[1];?> " style="position:absolute; left:475px; top:65px; width:157px; height:17px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" oscarDB=patient_id>


<input name="age" id="age" type="text" class="noborder" value = "<?php echo "Bed Number: ".$text_line3[1];?> " style="position:absolute; left:475px; top:95px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;"  oscarDB=age>


<input name="m$HT#value" id="m$HT#value" type="text" class="noborder" style="position:absolute; left:475px; top:120px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">


<input name="m$WT#value" id="m$WT#value" type="text" class="noborder" style="position:absolute; left:475px; top:150px; width:157px; height:15px; font-family:sans-serif; font-style:normal; font-weight:normal; font-size:12px; text-align:left; background-color:transparent;" value="">



<?php $top = "230px"; $height = "25px"; $width = "120px"; $start1 = "319px"; $start2 = "439px"; $start3 = "559px"; $start4 = "679px"; $start5 = "799px"; ?>

<table border="3" style="position: absolute;left: 100px;  height:intElemOffsetHeight; top: 260px;width: 700; left:100px; align:right;">

<tr><td><b>Record Date</td>
<td><b>Record Time</td>
<td><b>HR(BPM)</td>
<td><b>RR(breath/min) </td>
<td><b>EndTidal CO2(mmHg)</td>
<td><b>BP(S/D(mmHg))</td></tr>
<tr></tr><tr></tr> <tr><td>


<!#################
<?php
// Calculating the Hourly Data from the Mins Data
$fp = file($myFile);
$i=4; 
$sum1 = 0;$sum2 = 0;$sum3 = 0;$sum4 = 0;
$content = "";
$formData = "";
$Start_hr = explode("\t", $fp[4]);
while($fp[$i]<>'') { 
   $contents = $fp[$i];    
   $grp = substr($fp[4],0,2);
   $data = explode("\t", $fp[$i]);
   $grp_hr = "";
   if (substr($data[0],2) <>  ":00:00" ){
      $sum1 = $sum1+$data[1];$sum2 = $sum2+$data[2];$sum3 = $sum3+$data[3];$sum4 = $sum4+$data[4];


      $content = $content.$contents."<br/>";
   } else {
     $grp = substr($data[0],0,8);
      $hr = substr($fp[$i],0,8);
      $grp_hr = $grp_hour.$grp."<br/>";
      
      $cnt = ($i-4);
      $Hourly1 = $sum1/$cnt;$Hourly2 = $sum2/$cnt;$Hourly3 = $sum3/$cnt;$Hourly4 = $sum4/$cnt;  
      

      $HourData1 = "$data[0]\t".round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\t".$myFile."/".$fileData[1]."\n";
      
      if (substr($HourData1,6,8) <> '00	0	0	0'){
          $HourData = "$data[0]\t".round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\t".$myFile."/".$myUser."\n";
          
          $Dat = date(DATE_ATOM);
          $HourData2 = trim($text_line2[1])."\t"."$data[0]\t".round($Hourly1)."\t".round($Hourly2)."\t".round($Hourly3)."\t".round($Hourly4)."\t".$fileData[1]."\t".$Dat."\n";
      $formData = $formData.$HourData2;
       
      
        $Tim = " <a href=\"EMRform.php?varname=$HourData\">$grp_hr</a></A>";
 
         //echo " <p> <a href=\"EMRform.php?varname=$HourData\">$grp_hr</a></A>";
$HourData3 = "<b>".trim($text_line2[1])."<td>".$Tim."<td>".round($Hourly1)."<td>".round($Hourly2)."<td>".round($Hourly3)."<td>".round($Hourly4)."<tr>"."<td>";

 echo $HourData3;
      }
      
  }
  $i++;
} 



//This Saves the Hourly Data to a File. 
$fp = fopen('EMRData1.txt', 'w+');
fwrite($fp, $formData);
fclose('EMRData1.txt');
//echo " <p> <a href=\"EMRVerify.php?varname="">Verify Data</a></A>";

?>
</td> </tr> </table>

</html>