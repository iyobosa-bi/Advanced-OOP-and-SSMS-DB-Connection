<?php



abstract class PaymentProcessor{

    //this is an abstract class were the users share some workflows that will be all be defined in the class.the child class can implement the methods

    protected string $transactionId;
    protected float $amount;

    public function __construct($amount)
    {  

      if(!is_numeric($amount)){
                throw new Exception("Invalid amount passed");
        }

        $this->amount =  $amount;
        $this->transactionId = uniqid("trn-");

    }

    //validate the amount (all)
    //authenticate //(might differ for each payment system)
    //execute //(might differ)
    //log //(all will log a response)

    protected function validate(){
            if($this->amount <=0){
                throw new Exception("Invalid Amount- Amount must be greater than zero");
            }
    }

    abstract protected function authenticate();
    abstract protected function execute();

    protected function log(array $result):string{
        return "{$this->transactionId} Payment Status:{$result['status']}";
    }

    public function process(){
        $this->validate();
        $this->authenticate();
        $result = $this->execute();
       $finalResponse =  $this->log($result);
        print $finalResponse;
    }

}

















