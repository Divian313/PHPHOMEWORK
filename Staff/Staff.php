<?php
namespace Staff;

abstract class Staff implements Attendance{
    public $id;
    public $name;
    public $job;
    public $position;
    public $basicPay;
    public $absent;

    public function __construct(string $id, string $name, string $job, string $position, int $basicPay, int $absent){
        $this->id = $id;
        $this->name = $name;
        $this->job = $job;
        $this->position = $position;
        $this->basicPay = $basicPay;
        $this->absent = $absent;
    }
    public function getInfo(){        
        echo "ID: $this->id \n";
        echo "Name: $this->name \n";
        echo "Job: $this->job \n";
        echo "Position: $this->position \n";
        echo "Basic Pay: $this->basicPay \n";
        echo "Absent: $this->absent \n";
    }
    public function getSalary(){
        
    }
}


?>