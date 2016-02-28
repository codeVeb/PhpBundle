<?php
//PLEASE REFER COUNTRY CODES FROM "CURRENCY CODE.TXT" FILE

//link "google.currency.lib.php" to your files.
require_once('google.currency.lib.php');

//create objects of classes.
$google1 = new google_currency('USD', 'INR', 2);
$google2 = new google_currency('CNY', 'INR', 3);
$google3 = new google_currency('CAD', 'INR');

//get result only
// echo $google2->getit();
//get json object..
echo $google1->getjson();
// echo $google3->getjson();
?>