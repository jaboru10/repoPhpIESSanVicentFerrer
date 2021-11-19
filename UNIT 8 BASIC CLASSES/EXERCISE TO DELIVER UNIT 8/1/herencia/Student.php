<?php
class Student extends Person 
{
    private $name;
    private $licenseNumber;
    private $marks=array();
    

    public function __construct($name,$licenseNumber)
    {
        $this->_name = $name;
        $this->_licenseNumber = $licenseNumber;
        $marks = array(
            1    => -1,
            2  => -1,
            3  => -1,
        );

    }
    public function addMark($nota,$trimestre)
    {
        $posTrimestre=$trimestre-1;
        $this->_marks[$posTrimestre] =[$nota];
    }
    public function getMarkTrimestre($trimestre){
        $posTrimestre=$trimestre-1;
        echo "trimestre -->".$trimestre." posItem-->".$posTrimestre."<br>";
        $lenght=count($this->_marks);
        echo "lenght -->".$lenght."<br>";
      //$this->_marks[$posTrimestre];
        echo "-*-*->".array_values($this->_marks)[0];

        return $this->_marks[$trimestre];
      
        /*
          $mark=-1;
        $lenght=count($this->_marks);
        $tamaño=sizeof($this->_marks);
            echo "lenght -->".$lenght." tmaño-->".$tamaño."<br>";
        for ($i=0; $i < $tamaño; $i++) { 
            echo "--".$i."<br>";
            
            if($posTrimestre==$i){
                $mark=$this->_marks[$i];
                echo "*****".$mark."****";
                break;
            }
            
        }

         foreach($this->_marks as $index => $nota) {
            
        }
        */
       


 
        


    }
    public function getAverage($trimestre){
        $average=0;
        for ($i=0; $i < count($this->_marks); $i++) { 
            $average+=$this->_marks[$i];
        }
        return $average;
    }

    public function getName()
    {
        return $this->_name;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }



    public function getLicenseNumber()
    {
        return $this->_licenseNumber;
    }
    public function setLicenseNumber($licenseNumber)
    {
        $this->_licenseNumber = $licenseNumber;
    }


    public function getMarks()
    {
        return $this->_marks;
    }
    public function setMarks($marks)
    {
        $this->_marks = $marks;
    }

}