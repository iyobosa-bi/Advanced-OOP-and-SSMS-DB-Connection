<?php 


require_once("./Classes/PaySatckPayment.php");


try{
    $paystack =  new PaySatckPayment(1500);
    $paystack->pay(0);
    $tranId =  $paystack->getTransctionId();
    $paystack->verify($tranId);
}
catch(Throwable $t){
    print "ERROR:".$t->getMessage();
}