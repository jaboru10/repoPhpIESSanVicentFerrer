
        <?php
       
            require_once("Employee.php");
            $employee1=new Employee();
            $employee2=new Employee();
            $employee3=new Employee();
            $employee1->inicialize("Javier Boix Ruiz",4500);
            $employee2->inicialize("Mariano Martinez",1222);
            $employee3->inicialize("Vicente Abel",7500);
            echo $employee1->paytaxes()."<br>";
            echo $employee2->paytaxes()."<br>";
            echo $employee3->paytaxes()."<br>";
            
        
        ?>
  