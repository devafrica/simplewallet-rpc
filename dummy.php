<?php
require_once('cpa.class.php');
$cpaWallet = new Cpa();
$balance = $cpaWallet->getBalance();
// raw result from the function
var_dump($balance);
echo "<br>";
// how to return the result in json format
echo json_encode($balance);
echo "<br>";
//how to access json variable
echo $balance["available_balance"];
echo "<br><br>";

$address=$cpaWallet->getAddress();
var_dump($address);
echo "<br><br>";

$height=$cpaWallet->getHeight();
var_dump($height);
echo "<br><br>";
// commented out because it an be overwhelming out put for a demo file
// $transfers=$cpaWallet->getTransfers();
// var_dump($transfers);
// echo "<br><br>";
$paymentid=$cpaWallet->genPaymentId();
var_dump($paymentid);
echo "<br><br>";
//the following is the cpa donation address and is being used as dummy data, the function checks if an address is propperly formatted
$addressToBeChecked="cp2pSRsXYT3GQcDFN3VSnuSCLpDwfdrSMWm6BDnqgG1w51bDvgsqSGVFsu5xE3jTvReXVviqiqGkNE3Qym7EfHGo27hJmv6Kv";
$checkAddress=$cpaWallet->checkAddress($addressToBeChecked);
//returns bool in the form of int ie 1 or 0
var_dump($checkAddress);

echo "<br><br>";
?>
