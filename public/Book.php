<?php 


require_once('constants.php');

class Book{

        public $title;
        public $author;
        public $price;

        // public $type;

        // public $fileSize;

        // public $weight;



        public function __construct( string $title,string $author,float $price){

            $this->title =  $title;
            $this->author =  $author;
            $this->price =  $price;
            // $this->type =  $type;
            // $this->weight =  $weight;
            // $this->fileSize= $fileSize;

        }


        public function getTitle(){

            return $this->title;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function getPrice(){
            return $this->price;
        }


        // public function print():string{

            
        //     $string = "{$this->title},{$this->author},";
        //     if($this->type == "physical"){
        //             $string.= $this->weight;

        //     }else{
        //         $string.= $this->fileSize;
        //     }


        //     return $string;

        // }

}


$physicalBook = new Book(".NET Book","Ugo",50000,"physical","20kg");

// print $physicalBook->getPrice().NewLine;
// print $physicalBook->getAuthor().NewLine;
// print $physicalBook->print();












?>