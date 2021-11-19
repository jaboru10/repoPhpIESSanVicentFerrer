<?php
class Employee
{
    private $name;
    private $salary;

    

    public function __construct()
    {
      

    }
    public function inicialize($name,$salary)
    {
        $this->_name = $name;
        $this->_salary = $salary;
    }
    public function paytaxes(){
        $taxes="";
        
       if($this->_salary>3000){
        $taxes=" will pay taxes.";
       }else{
        $taxes=" don't will pay taxes.";
       }
       return $this->_name.$taxes;

    }

}