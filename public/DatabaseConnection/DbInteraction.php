<?php 

require_once("Db.php");

class DbInteraction extends Db{
    
    private $dbconn;

    public function __construct(){

            $this->dbconn= $this->connect();
    }
    public function getEmployeeDetails(){
            $sql = "SELECT * FROM Employees";
            $stmt= $this->dbconn->prepare($sql);
            $stmt->execute();
            $retrived =  $stmt->fetchAll();
            return $retrived;
    }

    public function insertEmployees(string $empId, string $empName,string $empAge,float $empSalary){
       
        try{
                $sql = "INSERT INTO dbo.Employees(EMPID,EMPNAME,EMPAGE,EMPSALARY) Values(?,?,?,?)";
                $stmt= $this->dbconn->prepare($sql);
                $stmt->execute([$empId,$empName,$empAge,$empSalary]);
                $id = $this->dbconn->lastInsertId();
                return $id;
        }catch(Exception $e){
                return $e->getMessage()."\n";
        }finally{
                return "Processing Completed";
        }
    }

}


$db= new DbInteraction();
$employeedts = $db->getEmployeeDetails();
$insertDetails =  $db->insertEmployees("0239","Abisola Olanas","24",370000);
echo $insertDetails;
// print_r($empl5oyeedts);