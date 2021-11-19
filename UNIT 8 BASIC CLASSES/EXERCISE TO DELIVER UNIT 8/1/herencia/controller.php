<?php session_start();
    require_once("Student.php");
    $alumnosArray=$_SESSION['alumnos'] = array();
    $contador=$_SESSION["contadorAlumnos"]; 
        
        if (isset($_POST['evento_send'])) {
            $send=$_POST["evento_send"];
            echo "entro por el send";
            
            if (isset($_POST['name']) && isset($_POST['licenseNumber']) && isset($_POST['mark2']) && isset($_POST['mark3']) && isset($_POST['mark1'])) { 
                $name=$_POST['name'];
                $licenseNumber=$_POST['licenseNumber'];
                $mark1=$_POST['mark1'];
                $mark2=$_POST['mark2'];
                $mark3=$_POST['mark3'];
            
                //create Student
                $student1=new Student($name,$licenseNumber);
                $student1->addMark(1,$mark1);
                $student1->addMark(2,$mark2);
                $student1->addMark(3,$mark3);
                $_SESSION['alumnos'][] = $student1;
                $_SESSION['contadorAlumnos']++;
                header("Location:form.php");
            
            }
        }elseif(isset($_POST['evento_revisar'])) {
            $revi=$_POST["evento_revisar"];
            echo "entro por el revisar ".count($_SESSION['alumnos'])." -".$contador."-";
            //no se resolver como manejar los arrays de objetos en las sessiones
            foreach ($_SESSION['alumnos'] as $value) {
                echo "-".$value."-";
            }
        }

      
        
      

