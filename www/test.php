<?php

    include('salary_calculation.php');
    include('employee.php');
    include('hourly_employee.php');
    include('salary_employee.php');
    

    $hourlyRate = new HourlyEmployee("Gideon", "Male", 45, 200);

    /* $salary = $hourlyRate->getIncome();

    echo $salary;*/

    $name = $hourlyRate->getName();
    echo $name;

    echo "<hr/>";
    
    $gender = $hourlyRate->getGender();
    echo $gender;

    echo "<hr/>";

    $hours = $hourlyRate->getHourSpent();
    echo $hours;

    echo "<hr/>";

    $rate = $hourlyRate->getRate();
    echo $rate;

    echo "<hr/>";

    $salary = $hourlyRate->calculateIncome($hours, $rate);
    echo $salary;

    echo "<hr/>";

    $hourlyRate->getProfile();

    echo "<hr/>";

    $salaryEmployee = new SalaryEmployee("Bosun", "Male", 200000);

    $salaryName = $salaryEmployee->getName();

    echo $salaryName;

    $salaryEmployee->getProfile();





?>