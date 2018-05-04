<!DOCTYPE html>
<!--


/*
*     0    Robija 1               50   Robija 2                    100  
*   --------x--------------------|------x-------------------------- 
*   
*/

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './model/Robot.php';
        $robot1=new Robot("Robija 1", 15, "#FF0000");//Red 
        $robot2=new Robot("Robija 2", 65, "#0000FF");//Blue
        
         echo "Start poz robota:" . $robot1->getIme() . " na poziciji: " . $robot1->getTrenutnapozicija() . "<br>";
         echo "Start poz robota:" . $robot2->getIme() . " na poziciji:" . $robot2->getTrenutnapozicija(). "<br>"; 
               
        
        while($robot1->getTrenutnapozicija() != $robot2->getTrenutnapozicija()){
            
            if($robot1->getTrenutnapozicija() >= $robot2->getTrenutnapozicija()){
                $robot1->setTrenutnapozicija(rand(0, 45)); //Ukoliko jedan tj prvi Robija 1 dodje iznad tacke drugog tj Robija 2 vraca se na poziciju od 1 -45 /random.
                $robot2->setTrenutnapozicija(rand(50, 100)); //Robija 2 se vraca na poziciju /random od min 50 do max 100. Ne ometaju rad tj ne preskacu jedan drugoga.  
                 echo '------------------<br>';
                 echo "Nova pozicije robota " . $robot1->getIme() . " na poziciji: " . $robot1->getTrenutnapozicija() . " * <br>";
                 echo "Nova pozicije robota " . $robot2->getIme() . " na poziciji: " . $robot2->getTrenutnapozicija() . " * <br>";
                 echo '------------------<br>';
                 
            }else{
              
                

                $robot1->pomeriDesno();
                $robot2->pomeriLevo();

                echo "<br>Pozicija robota: " . $robot1->getIme() ." >:" . $robot1->getTrenutnapozicija(). "<br>";
                echo "Pozicija robota:" . $robot2->getIme() ." >:" . $robot2->getTrenutnapozicija() . "<br>"; 

                $robot1->pomeriDesno();
             
                $robot2->pomeriLevo();
                
                 echo "<br>Pozicija robota: " . $robot1->getIme() ." >:" . $robot1->getTrenutnapozicija(). "<br>";
                echo "Pozicija robota:" . $robot2->getIme() ." >:" . $robot2->getTrenutnapozicija() . "<br>";
            }
            
                      
        }
                
            
        ?>
    </body>
</html>
