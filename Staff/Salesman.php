<?php

// require_once __DIR__ . '/Staff.php';
namespace Staff;

Class Salesman extends Staff {    
    public $sales;    

    public function __construct(string $id, string $name, string $job, string $position, int $basicPay, int $absent,int $sales){
        parent::__construct($id, $name, $job, $position, $basicPay, $absent);        
        $this->sales = $sales;        
    }
    public function getInfo(){
        parent::getInfo();        
        echo "Sales: $this->sales \n";
    }
    public function getSalary()
    {
        // echo "Sum Salary: ";
        return $this->basicPay + $this->sales*45/100;
    }
    public function absent(){
        return $this->absent;
    }
    public function netPay(){
        return $this->getSalary() - $this->absent*20;
    }
    
}
?>

