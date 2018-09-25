<?php
// USA ePay PHP Library.
//      v1.6
//
//      Copyright (c) 2002-2008 USA ePay
//      For support please contact devsupport@usaepay.com
//
//  The following is an example of running a transaction using the php library.
//  Please see the README file for more information on usage.
//





// Change this path to the location you have save usaepay.php to
include "usaepay.php";

// Instantiate USAePay client object
$tran=new umTransaction;

// Merchants Source key must be generated within the console
$tran->key="_EW1A494eFi2GI0DNf36PC786OtH58g3";
$tran->pin="2743";

// Send request to sandbox server not production.  Make sure to comment or remove this line before
//  putting your code into production
$tran->usesandbox=true;    

$tran->command="authonly"; 
$tran->card=$_POST['CardNumber'];		
$tran->exp=date('my',strtotime($_POST['ExpDate']));			
$tran->amount=$_POST['Amount'];			
$tran->invoice="1234";   		
$tran->cardholder=$_POST['CardHolder']; 	
$tran->street=$_POST['StreetAdress'];	
$tran->zip=$_POST['ZipCode'];			
$tran->description="Online Order";	
$tran->cvv2=$_POST['CCV'];				


if (!empty($_POST)) {
	echo "<h1>Please Wait One Moment While We process your card.<br>\n";
	flush();
	if($tran->Process())
	{
		echo "<b>Card approved</b><br>";
		echo "<b>Authcode:</b> " . $tran->authcode . "<br>";
		echo "<b>AVS Result:</b> " . $tran->avs_result . "<br>";
		echo "<b>Cvv2 Result:</b> " . $tran->cvv2_result . "<br>";
		echo "<a href='index.php' class='btn btn-success'> Go back</a>";
	} else {
		echo "<b>Card Declined</b> (" . $tran->result . ")<br>";
		echo "<b>Reason:</b> " . $tran->error . "<br>";	
		echo "<a href='index.php' class='btn btn-success'> Go back</a>";
		//if($tran->curlerror) echo "<b>Curl Error:</b> " . $tran->curlerror . "<br>";
	}
} else {
	echo "Empty data, try again ";
	echo "<a href='index.php' class='btn btn-success'> Go back</a>";
}
				

?>