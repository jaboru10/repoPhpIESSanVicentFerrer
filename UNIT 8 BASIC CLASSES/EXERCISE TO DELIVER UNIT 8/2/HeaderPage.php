<?php
class HeaderPage{
    private $title;
    private $pos;
   
    public function __construct()
    {
    }
    public function inicialize($title,$pos)
    {
        $this->_title = $title;
        $this->_pos = $pos;
    }
    public function returnHeader(){
       $align="";
        if($this->_pos==0){
            $align="center";
        }elseif($this->_pos==1){
            $align="right";
        }elseif($this->_pos==2){
            $align="left";

        }

        return '<p align='.$align.'>'.$this->_title.'</p>';
    }
   

}