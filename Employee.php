<?php
class Employee {
    // Properties
    public $name;
    public $title;
    public $salary;
  
    // Methods
    function set_EmployeeName($name) {
        $this->name = $name;
    }
    function get_EmployeeTitle() {
        return $this->title;
    }
    function get_EmployeeProfile() {
        return $this->name;
    }
    function get_EmployeeMonthlySalary() {
        return $this->salary;
    }
  }
?>  
