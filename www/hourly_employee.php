<?php    #hourlyEmployee class

    class HourlyEmployee extends Employee
    {
        private $_hourSpent;

        private $_rate;

        private $_money;

        

        /*@override*/
        public function __construct($name, $gender, $hourSpent, $rate) {

            $this->_type = "Hourly Employee";
            $this->_status = "Part-time";
            $this->_name = $name;
            $this->_gender = $gender;
            $this->_hourSpent = $hourSpent;
            $this->_rate = $rate;
            $this->_money = $money;


        }

        public function getHourSpent() {
            return $this->_hourSpent;
        }

        public function getRate() {
            return $this->_rate;
        }

        public function calculateIncome($hourSpent,$rate) {
            if($hourSpent > 40) {

                define("OVERTIME", 1000);

                return ($hourSpent * $rate) + OVERTIME;
            }

            return $this->_money = $hourSpent * $rate;
        }

        public function getProfile() {
            echo '<ul>';
            
            echo '<li> Name: '.$this->getName().'<li>';
            echo '<li> Gender: '.$this->getGender().'<li>';
            echo '<li> Type: '.$this->getType().'<li>';
            echo '<li> Status: '.$this->getStatus().'</li>';
            echo '<li> Hours Spent: '.$this->getHourSpent().'</li>';
            echo '<li> Rate: '.$this->getRate().'</li>';
            echo '<li> Income: '.$money.'</li>';



            echo '</ul>';
        }

        

    }


?>