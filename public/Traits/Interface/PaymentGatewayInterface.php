<?php 



interface PaymentGatewayInterface{

        //just declare the methods to be inplemented in the main class by using implement
        public function pay();
        public function verify(string $transactionId);

}