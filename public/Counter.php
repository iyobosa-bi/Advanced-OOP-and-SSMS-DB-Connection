<?php 


require_once("constants.php");


abstract class  Counter{
//static properties

    public static int $counter = 0;

} 


class Connection{

    public const Success = 200;
    public const UnAuthorized = 401;

    private static int $count = 0;
    public function __construct(){

        self::$count++;
    }

    public static function  getConnectionCount(){
            return self::$count;
    }
}


Counter::$counter++;
Counter::$counter++;


print Counter::$counter."\n"; // accessed by a scope operatot
$conn = new Connection();
print Connection::getConnectionCount().NewLine;
print Connection::Success.NewLine;
print Connection::UnAuthorized;


?>