<?php

// require_once __DIR__ . '/Staff.php';
namespace Staff;

Class Manager extends Staff {
    public $totalPersonnel;//total number of personnel in the team 
    public $totalSales; //total sales of all personnel in the team
    public function __construct(string $id, string $name, string $job, string $position, int $basicPay, int $absent, int $totalPersonnel, int $totalSales)
    {
        parent::__construct($id, $name, $job, $position, $basicPay, $absent);
        $this->totalPersonnel = $totalPersonnel;// total number of members in the team
        $this->totalSales = $totalSales; // sales of the whole team
    }
    public function getInfo(){
        parent::getInfo();
        echo "Total Personnel: $this->totalPersonnel \n";
        echo "Total Sales: $this->totalSales \n";
    }
    public function getSalary()
    {
        // echo "Sum Salary: ";
        return$this->basicPay + $this->totalSales*15/100;
    }
    public function absent(){
        return $this->absent;
    }
    public function netPay(){
        return $this->getSalary() - $this->absent*100;
    }
}
