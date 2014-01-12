<?php
mysql_connect("localhost","root","");
 mysql_select_db("ecommerc");

 echo "<hr>";

             echo "<h2> Education Book  </h2>" ;

 $sql="SELECT * FROM books_data WHERE `sub_id`=4  ORDER BY `time` DESC";
 $res= mysql_query($sql);$a;
 echo '<table><tr>' ;
 while($row=mysql_fetch_assoc($res)){
       $result=    mysql_query("SELECT `name` FROM `books_2` WHERE `sub_id`=".$row['sub_id']."");
       while($row1= mysql_fetch_assoc($result)){
             $a= $row1['name'] ;
       }


            ///  here whole data goes around you can see
       echo '<td><a href="detail.php?id=',$row['last_id'],'&cat=books&cat1=',$row['name'],'"><img src="'.$a.'/',$row['name'],'.jpg?=',$row['sub_id'],'"  height="200" width="200"alt="" /></a>'."</br>".$row["name"].'</br>'.$row["description"]."
       </br>$".$row['price'].'</td>';

 }
 echo '</tr> </table>' ;
 echo "<hr>";













?>