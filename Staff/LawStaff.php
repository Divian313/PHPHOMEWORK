<?php

namespace Staff;

Class LawStaff extends Staff {
    public $degree;    
    public function __construct(string $id, string $name, string $job, string $position, int $basicPay, int $absent, string $degree)
    {
        parent::__construct($id, $name, $job, $position, $basicPay, $absent);        
        $this->degree = $degree;
    }
    public function getInfo(){
        parent::getInfo(); 
        echo "Degree: $this->degree \n";
    }
    public function getSalary()
    {
        // echo "Sum salary: ";
        if (strcmp($this->degree, "university") == 0){
            return ($this->basicPay + ($this->basicPay*15/100)) ;
            
        } else return $this->basicPay;       
    }
    public function absent(){
        return $this->absent;
    }
    public function netPay(){
        return $this->getSalary() - $this->absent*20;
    }
    public function processed(){
        echo "Dispatch is being processed";
    }
}

