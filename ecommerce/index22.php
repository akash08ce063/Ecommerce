﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Created by: Reality Software | www.realitysoftware.ca
Released by: Flash Gallery | www.flash-gallery.org
Note: This is a free template released under the Creative Commons Attribution 3.0 license, 
which means you can use it in any way you want provided you keep links to authors intact.
Don't want our links in template? You can pay a link removal fee: www.realitysoftware.ca/templates/
You can also purchase a PSD-file for this template.
--><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title><link href="style.css" rel="stylesheet" type="text/css"></head><body>
<div id="container">
	<!-- header -->
    <div id="header">
    	<div id="logo"><a href="#">Akash's Web Store</a>
        <br>Work hard but presicion is equally improtant
        </div>
        <div id="menu">
        	<ul><li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Contacts</a></li>
          </ul></div>
    </div>
    <!--end header -->
    <!-- main -->
    <div id="main">
          <div id="sidebar">
          	<u><b>Akash patel</b></u></br>
            hey any customer have a problem with any functionality then report me please , and any bug you reported on my
first release of the e commerce then i will thanks for you

and first thing that i am not a designer so look and feel may be not so greate about that sorry
















</div>
          <div id="text">
                
<?php
               session_start();



      echo "<a href='sports.php'><h2>Sports</h2></a>" ;



 mysql_connect("localhost","root","");

mysql_select_db("ecommerc");




$sql="SELECT * FROM sports_data  ORDER BY `time` DESC LIMIT 5";
        $res= mysql_query($sql);$a;
   echo '<table><tr>' ;

        while($row=mysql_fetch_assoc($res)){


              $result=    mysql_query("SELECT `name` FROM `sports_2` WHERE `sub_id`=".$row['sub_id']."");

                    while($row1= mysql_fetch_assoc($result)){
                                  $a= $row1['name'] ;

                        }


            ///  here whole data goes around you can see

            echo '<td><a href="detail.php?id=',$row['last_id'],'&cat=sports&cat1=',$row['name'],'"><img src="'.$a.'/',$row['name'],'.jpg?=',$row['sub_id'],'"  height="200" width="200"alt="" /></a>'."</br>".$row["name"].'</br>'.$row["description"]."
</br>$".$row['price'].'</td>';








        }
           echo '</tr> </table>' ;

echo "<hr>";


    ////////////////////////////// End of sports catagory/////////////////////

    /////////////////////////////  start of cloth catagory /////////////////


   echo "<hr>" ;

      echo "<a href='cloths.php'><h2>Cloths</h2></a>" ;



   $sql="SELECT * FROM cloths_data  ORDER BY `time` DESC LIMIT 5";
   $res= mysql_query($sql);$b;
   echo '<table><tr>' ;
   while($row=mysql_fetch_assoc($res)){
     $result=    mysql_query("SELECT `name` FROM `cloths_2` WHERE `sub_id`=".$row['sub_id']."");
     while($row1= mysql_fetch_assoc($result)){
       $b= $row1['name'] ;
     }            ///  here whole data goes around you can see

     echo '<td><a href="detail.php?id=',$row['last_id'],'&cat=cloths&cat1=',$row['name'],'"><img src="'.$b.'/',$row['name'],'.jpg?=',$row['sub_id'],'"  height="200" width="200"alt="" /></a>'."</br>".$row["name"].'</br>'.$row["description"]."
     </br>$".$row['price'].'</td>';
   }
   echo '</tr> </table>' ;
   echo "<hr>";


/////////////////////////// End of cloth catagoty ///////////////////

/////////////////////////// start of book catagory /////////////////



   echo "<hr>" ;

      echo "<a href='books.php'><h2>Books</h2></a>" ;



   $sql="SELECT * FROM books_data  ORDER BY `time` DESC LIMIT 5";
   $res= mysql_query($sql);$b;
   echo '<table><tr>' ;
   while($row=mysql_fetch_assoc($res)){
     $result=    mysql_query("SELECT `name` FROM `books_2` WHERE `sub_id`=".$row['sub_id']."");
     while($row1= mysql_fetch_assoc($result)){
       $b= $row1['name'] ;
     }            ///  here whole data goes around you can see

     echo '<td><a href="detail.php?id=',$row['last_id'],'&cat=books&cat1=',$row['name'],'"><img src="'.$b.'/',$row['name'],'.jpg?=',$row['sub_id'],'"  height="200" width="200"alt="" /></a>'."</br>".$row["name"].'</br>'.$row["description"]."
     </br>$".$row['price'].'</td>';
   }
   echo '</tr> </table>' ;
   echo "<hr>";












//////////////////////////  end of  book catagory /////////////////////


















   echo "<a href='checkout1.php'>Checkout functionality</a>" ;


?>


          </div>
    </div>
    <!-- end main -->
    <!-- footer -->
    <div id="footer">
    <div id="left_footer">© Copyright 2012 Akash's Web store   <div id="right_footer">


    </div>
    </div>
    <!-- end footer -->
</div>
</body></html>
