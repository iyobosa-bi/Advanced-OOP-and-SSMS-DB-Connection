<?php

require_once("../Interface/PaymentGatewayInterface.php");
require_once("../MainTraits/LoggerTrait.php");
require_once("../MainTraits/NotificationTrait.php");


abstract class PaymentProcessors implements PaymentGatewayInterface
{
    use LoggerTrait, NotificationTrait;

    protected $transactionId;
    protected float $amount;

    public function __construct($amount)
    {
        if (is_string($amount) || !is_numeric($amount) || $amount <= 0) {
            throw new Exception("Invalid amount passed");
        }

        $this->amount = $amount;
        $this->transactionId = uniqid("trn-");

    }
    public function verify(string $transactionId)
    {

        $this->log("Verify transaction {$transactionId}");
        return true;

    }

    abstract public function pay();



}
