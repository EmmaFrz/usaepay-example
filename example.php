<?php

include "./usaepay.php";    // Change this path to the location you have save usaepay.php

$tran=new umTransaction;

$tran->key="_U88GQ3F4A64h5QH82x26DhuBfB1aH5C";      // Your Source Key
$tran->pin="1234";      // Source Key Pin
$tran->usesandbox=true;     // Sandbox true/false
//$tran->ip=$REMOTE_ADDR;   // This allows fraud blocking on the customers ip address 
$tran->testmode=0;    // Change this to 0 for the transaction to process

$tran->command="creditvoid";    // Command to run; Possible values are: cc:sale, cc:authonly, cc:capture, cc:credit, cc:postauth, check:sale, check:credit, void, void:release, refund, creditvoid and cc:save. Default is cc:sale.

$tran->refnum="987654321";   // Specify refnum of the transaction that you would like to capture.


echo "`<h1>`Please wait one moment while we process your request...`<br>`\n";
flush();

if($tran->Process())
{
    echo "<b>Request Approved</b><br>";
    echo "<b>Authcode:</b> " . $tran->authcode . "<br>";
    echo "<b>RefNum:</b> " . $tran->refnum . "<br>";
    echo "<b>AVS Result:</b> " . $tran->avs_result . "<br>";
    echo "<b>Cvv2 Result:</b> " . $tran->cvv2_result . "<br>";
} else {
    echo "<b>Card Declined</b> (" . $tran->result . ")<br>";
    echo "<b>Reason:</b> " . $tran->error . "<br>"; 
    if(@$tran->curlerror) echo "<b>Curl Error:</b> " . $tran->curlerror . "<br>";   
}       
?>