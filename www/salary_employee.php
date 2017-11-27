<?php    #salary_employee class

    class SalaryEmployee extends Employee
    {

        /*@override*/
        public function __construct($name, $gender, $income) {

            $this->_type = "Salary Employee";
            $this->_status = "Full-time";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_income = $income;

        }

        

    }


?>