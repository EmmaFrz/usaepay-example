<?php

include "usaepay.php";

// Instantiate USAePay client object
$tran=new umTransaction;

// Merchants Source key must be generated within the console

//Cambiar las Llaves y el Pin por las de su usuario en usaepay
$tran->key="_EW1A494eFi2GI0DNf36PC786OtH58g3";
$tran->pin="2743";

// Send request to sandbox server not production.  Make sure to comment or remove this line before
//  putting your code into production
$tran->usesandbox=true;    

$tran->command="check:credit"; 
$tran->account=$_POST['AccNumber'];		
$tran->routing=$_POST['RoutingNumber'];			
$tran->amount=$_POST['Amount'];			
$tran->invoice="1234";   		
$tran->ssn=$_POST['SSNumber']; 	
$tran->checknum=$_POST['CheckNumber'];	
$tran->accounttype='savings';			
$tran->description="Online Order";
$tran->cardholder=$_POST['NameOnCheck'];	

echo "<h1>Please Wait One Moment While We process your check.<br>\n";
flush();

if($tran->Process())
{
	echo "<b>Check approved</b><br>";
	echo "<b>Authcode:</b> " . $tran->authcode . "<br>";
	echo "<b>AVS Result:</b> " . $tran->avs_result . "<br>";
	//echo "<b>Cvv2 Result:</b> " . $tran->cvv2_result . "<br>";
	echo "<a href='index.php' class='btn btn-success'> Go back</a>";
} else {
	echo "<b>Check Declined</b> (" . $tran->result . ")<br>";
	echo "<b>Reason:</b> " . $tran->error . "<br>";	
	//if($tran->curlerror) echo "<b>Curl Error:</b> " . $tran->curlerror . "<br>";
	echo "<a href='index.php' class='btn btn-success'> Go back</a>";
	
}		

?>