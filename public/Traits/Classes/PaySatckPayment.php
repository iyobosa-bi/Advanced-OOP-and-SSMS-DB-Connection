<?php 


// $target = __DIR__ . '/../MainAbstracts/PaymentProcessors.php';
// echo "DEBUG __DIR__: " . __DIR__ . PHP_EOL;
// echo "DEBUG target path: " . $target . PHP_EOL;
// echo "realpath(target): " . (realpath($target) ?: 'NULL') . PHP_EOL;
// echo "file_exists(target): " . (file_exists($target) ? 'yes' : 'no') . PHP_EOL;
// echo "is_readable(target): " . (is_readable($target) ? 'yes' : 'no') . PHP_EOL;
// exit;

require_once "../MainAbstracts/PaymentProcessors.php";

class PaySatckPayment extends PaymentProcessors{

    public function pay(): bool{
        //complete the abstract code here

        $this->log("Processing the Payment of amount ". $this->amount);
        $this->notify("Paystack Payment of ".$this->amount.  " Successful");
        return true;
    }

    public function getTransctionId(){
        return $this->transactionId;
    }

}
// $paystack = new PaySatckPayment(600);
// print $paystack->getTransctionId();


try{
    $paystack =  new PaySatckPayment(20);
    $paystack->pay();
    $tranId =  $paystack->getTransctionId();
    $paystack->verify($tranId);
}
catch(Throwable $t){
    print "ERROR:".$t->getMessage();
}
