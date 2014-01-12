<?php
 error_reporting(0);
 



  if($_GET['id']!=""){

 
      if($_GET['submit']!=""){
          $c=1;
                  echo   $c  ;
            echo "Updated";
 
        }
   
 
 
 }



$b['item']=array();

$arr1=array("Akash","2");
array_push($b['item'],$arr1);
   

$arr=array("bittu","3");
array_push($b['item'],$arr);
   
  //  print_r($b['item']);

  //  echo 


   for($i=0;$i<count($b['item']);$i++){
       echo "ITEM".$i ."</br>";
  

         for($j=0;$j<2;$j++){

        print_r( $b['item'][$i][$j]);
        echo "</br>" ;
     


      } 

       echo "<a href='checkout.php?id=$i'>DELETE</a>";
 
       echo "<form action='checkout.php'> 






<input type='text' name='text' />
<input type='submit' name='submit'  value = 'update'/>
<input type='hidden' name='id' value=$i />


</form>";
    

      echo "</br>" ;           
 
 
     }


$d=0 ;

for($i=0;$i<count($b['item']);$i++){


  $d=$d+$b['item'][$i][1]   ;




}
echo "Total :$".$d ;

        echo "<a href='checkout.php?id=1&choice=delete'><input type='button' Value='delete' /></a>" ;
echo "<a href='checkout.php?id=1&choice=update'><input type='button' Value='update' /></a>" ;

?>