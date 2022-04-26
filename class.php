<?php

class Company
{
    private string $nameCompany;
    private array $departments = [];

    public function addDepartment(Department $department): void
    {
        $this->departments [] = $department;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function setNameCompany(string $nameCompany): void
    {
        $this->nameCompany = $nameCompany;
    }

    public function getNameCompany(): string
    {
        return $this->nameCompany;
    }
}

class Department
{
    private array $employees = [];
    private string $nameDepartment;
    private string $typeDepartment;

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function setNameDepartment(string $nameDepartment): void
    {
        $this->nameDepartment = $nameDepartment;
    }

    public function getNameDepartment(): string
    {
        return $this->nameDepartment;
    }

    public function setTypeDepartment(string $typeDepartment): void
    {
        $this->typeDepartment = $typeDepartment;
    }

    public function getTypeDepartment(): string
    {
        return $this->typeDepartment;
    }
}


class Employee
{
    private JobPosition $jobPosition;
    private string $surnameEmployee;
    private string $nameEmployee;

    public function setJobPosition(JobPosition $jobPosition): void
    {
        $this->jobPosition = $jobPosition;
    }

    public function getJobPosition(): JobPosition
    {
        return $this->jobPosition;
    }

    public function setNameEmployee(string $name): void
    {
        $this->nameEmployee = $name;
    }

    public function getNameEmployee(): string
    {
        return $this->nameEmployee;
    }

    public function setSurnameEmployee(string $surnameEmployee): void
    {
        $this->surnameEmployee = $surnameEmployee;
    }

    public function getSurnameEmployee(): string
    {
        return $this->surnameEmployee;
    }
}

class JobPosition
{
    private string $nameJobPosition;
    private float $salary;

    public function setNameJobPosition(string $nameJobPosition): void
    {
        $this->nameJobPosition = $nameJobPosition;
    }

    public function getNameJobPosition(): string
    {
        return $this->nameJobPosition;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}
