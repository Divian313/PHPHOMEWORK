<?php

namespace Staff;

class Administrators extends Staff {
    public function __construct(string $id, string $name, string $job, string $position, int $basicPay, int $absent)
    {
        parent::__construct($id, $name, $job, $position, $basicPay, $absent);
    }
    public function getInfo(){
        parent::getInfo(); 
    }
    public function getSalary()
    {
        // echo "Sum Salary: ";
        return$this->basicPay;
    }
    public function absent(){
        return $this->absent;
    }
    public function netPay(){
        return $this->getSalary() - $this->absent*50;
    }
    public function checkAttendance(){
        //check Attendance
    }
    public function getEmployeeById($idEmployee){
        //return Employee by id
    }
    public function updateEmployeeById($idEmployee){
        //update Employee by id
    }
    public function deleteEmployeeById($idEmployee){
        //delete Employee by id
    }
    public function addEmployeeById($idEmployee){
        //add Employee by id
    }    
}