<?php

$CMDfile = $InstLoc.'/Applications/HRAI/CoreCommands/CMDconvert.php'; 
$inputMATCH = array('convert', 'change file');
$CMDcounter++;

if (isset($input)) {
  foreach ($inputMATCH as $inputM1) {
    if (preg_match('/'.$inputM1.'/', $input)) {
      $CMDinit[$CMDcounter] = 1;
      $input = preg_replace('/'.$inputM1.'/',' ',$input); } } }
      
if (!isset($input)) {
  $input = ''; }

$input = str_replace('   ',' ',$input);
$input = str_replace('  ',' ',$input);
$input = rtrim($input);
$input = ltrim($input);
if ($CMDinit[$CMDcounter] == 1) {

// / --------------------------------------

include('/var/www/html/HRProprietary/HRCloud2/Applications/HRConvert2/uploadbuttonhtmlNOGUI.php'); }
?>