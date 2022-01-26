<?php

require __DIR__ . '/vendor/autoload.php';

use Staff\Administrators;
use Staff\Staff;
use Staff\Salesman;
use Staff\LawStaff;
use Staff\Manager;
use Staff\Attendance;

$sale1 = new Salesman("S1", "Dam Vinh Hung", "Salesman", "Personnel", 500, 20, 10000);
$sale1->getInfo();
echo "Salary sale - ".$sale1->getSalary()." - net pay - ".$sale1->netPay();

$law1 = new LawStaff("L1", "Tien Luat", "Legal specialist", "Personnel", 850, 3, "university");
echo "\n\n";
$law1->getInfo();
echo "Salary law staff - ".$law1->getSalary()." - net pay - ".$law1->netPay();

$manager1 = new Manager("M1", "Vo Hoang Yen", "salesman", "manager", 1000, 2,  9, 100000);
echo "\n\n";
$manager1->getInfo();
echo "Manager - ".$manager1->getSalary()." - net pay - ".$manager1->netPay()."\n";

$admin = new Administrators("Admin", "Nguyen Phuong Hang", "admin", "Personnel", 650, 2);
echo "\n";
$admin->getInfo();
echo "Administrators - ".$admin->getSalary()." - net pay - ".$admin->netPay()."\n";

