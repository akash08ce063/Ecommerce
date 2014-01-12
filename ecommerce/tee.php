<?php
                $data="cloths" ;

      echo   $sql="SELECT * FROM ".$data."_data WHERE last_id=1" ;

         mysql_connect("localhost","root","");
         
         mysql_select_db("ecommerc");
         
         
        $r= mysql_query($sql);
           while($row=mysql_fetch_assoc($r)){
           
            echo $row['description'];


           }



?>