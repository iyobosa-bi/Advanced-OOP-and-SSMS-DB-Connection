<?php 


class BaseClass{


    public $publicProperty = "Public property can be accessed anywhere in your code";

    public $protectedProperty= "This is a protected property";


    private $privateProperty = "Private properties can only be accessed within the declaring class";

    public function getProtectedProperty (){


       return $this->protectedProperty;

    }

    public function getPrivateProperty(){
        return $this->privateProperty;
    }


}























?>