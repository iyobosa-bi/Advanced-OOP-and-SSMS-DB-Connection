<?php 

require_once("PaymentProcessor.php");
require_once("../constants.php");

class PayStackPayment extends PaymentProcessor{

        //at first it gave an error because PayStackPayment has not implemented an of the abstract methods from PaymentProcessor

        protected function authenticate()
        {
           print "Authentication Successful".NewLine;
        }

        protected function execute()
        {
            print "Executing Payment".NewLine;
            return ["status"=>"success","gateway"=>"paystack"];
        }
}

try{
$paystack =  new PayStackPayment("123"); //pass test value here
$paystack-> process();

}
catch(Throwable $t){
    echo $t->getMessage();
}




