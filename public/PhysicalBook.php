<?php 


require_once("Book.php");

class PhysicalBook extends Book{

    public $weight;

    public function __construct(string $title, string $author, float $price, float $weight){
           parent::__construct($title,$author,$price);
           $this->weight = $weight;
    }

    public function getWeight(){
         
        return $this->weight;

    }

    

}


$pb= new PhysicalBook("a random book","Jane Doe",2000,20.00);


 print $pb->getAuthor().NewLine;
 print $pb->getWeight();



















?>