<?php


       $a="sports";


        $b=$a."_data";

        mysql_connect("localhost","root","");

        mysql_select_db("ecommerce") or die("cannot onnect");

        echo $b;

            $b="sports_data" ;
          

    
        $res= mysql_query("SELECT * FROM $b ");      
        
        
        while($row=mysql_fetch_assoc($res)){

             echo $row['name'] ;
      } 


?>