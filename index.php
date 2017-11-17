<?php
//if the relay status file does not exist then generate the file now with the default entry of 'off'
//if the file does exist then read in what it says. If the data is good (value of 0 or 1) then that is the
 //current status; otherwise we have a corrupt file contents and need to replace them with the default value 0.
$currentStatus = "0";
$filename = "relay-status.txt";
if(!file_exists($filename)){
   file_put_contents($filename, "0");
}
else{
   $contents = file_get_contents($filename);
   $contents = trim($contents);
   if($contents == "1") $currentStatus = "1";
   elseif($contents == "0") $currentStatus = "0";
   else{
      $currentStatus = "0";
      file_put_contents($filename, "0");
   }
}

//check if the user has submitted a (potentially new) value for status
//if the value is "1" or "0" then if that is different from current status, amend the file
//if the value is "1" or "0" and not different from current status, do nothing
//if the value is not "1" or "0" then the submitted data is no use.
if(isset($_GET['status'])){
   $submittedStatus = trim($_GET['status']);
   if($submittedStatus == "1"){
      if($currentStatus == "0"){
      $currentStatus = "1";
         file_put_contents($filename, "1");
      }
   }
   elseif($submittedStatus == "0"){
      if($currentStatus == "1"){
         $currentStatus = "0";
         file_put_contents($filename, "0");
      }
   }
}

//display the (maybe new) current status and a link to toggle that status
print "Current Relay Status: ";
if($currentStatus == "1") print "<font size = 8 color = green><b>ON</b></font>";
else print "<font size = 8 color = red><b>OFF</b></font>";
print "<br><br>";
print "Click here to change status to ";
if($currentStatus == "1") print "<a href = 'relay-control.php?status=0'><font color = red><b>OFF</b></font></a>";
else print "<a href = 'relay-control.php?status=1'><font color = green><b>ON</b></font></a>";
?>
