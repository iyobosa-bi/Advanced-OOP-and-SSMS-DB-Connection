

<?php 


require_once('BaseClass.php');
require_once('constants.php');


class SubClass extends BaseClass{

    public $relatedProtectedProperty;

    public function getParentProtectedProperty(){

            return $this->protectedProperty.".The second call";

    }



}


$subClass = new SubClass();
 print $subClass->publicProperty.NewLine;
 print $subClass->relatedProtectedProperty.NewLine;
 print $subClass->getProtectedProperty().NewLine;
 print $subClass->getParentProtectedProperty().NewLine;
print $subClass->getPrivateProperty();
?>