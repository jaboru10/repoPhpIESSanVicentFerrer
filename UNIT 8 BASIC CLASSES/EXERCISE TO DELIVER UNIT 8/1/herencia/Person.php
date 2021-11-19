<?php
class Person
{
    private $name;
 
    public function __construct($numb)
    {
        $this->num = $numb;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }
}
