<?php

require_once 'class.php';

$carpenter = new JobPosition();
$carpenter->setNameJobPosition('Stolarz');
$carpenter->setSalary(3100);

$bricklayer = new JobPosition();
$bricklayer->setNameJobPosition('Murarz');
$bricklayer->setSalary(7000);

$estimator = new JobPosition();
$estimator->setNameJobPosition('Kosztorysant');
$estimator->setSalary(500);

$employee1 = new Employee();
$employee1->setNameEmployee('Adam');
$employee1->setSurnameEmployee('Małysz');
$employee1->setJobPosition($carpenter);

$employee2 = new Employee();
$employee2->setNameEmployee('Robert');
$employee2->setSurnameEmployee('Kubica');
$employee2->setJobPosition($estimator);

$employee3 = new Employee();
$employee3->setNameEmployee('Mariusz');
$employee3->setSurnameEmployee('Pudzianowski');
$employee3->setJobPosition($bricklayer);

$departmentA = new Department();
$departmentA->setNameDepartment('Stolarka');
$departmentA->addEmployee($employee1);
$departmentA->addEmployee($employee2);

$departmentB = new Department();
$departmentB->setNameDepartment('Ocieplenia');
$departmentB->addEmployee($employee2);
$departmentB->addEmployee($employee3);

$company = new Company();
$company->setNameCompany('BudoDach');
$company->addDepartment($departmentA);
$company->addDepartment($departmentB);

$printer = new Printer();
//$printer->printNameCompany($company);
//$printer->printNameDepartment($departmentA);
$printer->printCompanyInfo($company);
$printer->printCompanyEmployeesCosts($company);
$printer->printDepartmentEmployeesCosts($company->getDepartments()[0]);