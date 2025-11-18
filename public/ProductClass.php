<?php 

// require_once("logaction.php");

class ProductClass{

    //method and properties
    // public $name;
    // public $price; # cents


    // public function __construct($name= "John", $price = 80){

    //         $this->name =  $name;
    //         $this->price =  $price;
    //     //called behind the scenes function
    // }

    public function __construct(public $name="John",public $price = 80){

        //Dependency injection
    }

    

    public function priceAsCurrency($divisor=30,$symbol){

        //symbol here is the required parameter because it has no default value

        $priceCurrency =  (float)$this->price/$divisor;
        return $symbol.$priceCurrency;
    }

}



$product = new ProductClass(price:60);
var_dump($product);
echo($product->name."\n");

$product->name = "Sponge";
echo($product->name."\n");

print($product->price."\n");

$product->price =  590;
print $product->priceAsCurrency(40,symbol:'$'); //reqired parameter first then optional parameter.




// error_log("Debug Message");


?>


