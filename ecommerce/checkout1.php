
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        	<ul><li><a href="sports.php">Sports</a></li>
              <li><a href="cloths.php">Cloths</a></li>
              <li><a href="books.php">Books</a></li>
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


<?php  

  ///////////////   this desin oh no /////////

?>




</div>
          <div id="text">



































<?php

   error_reporting(0) ;
 session_start();
 if($_GET['id']!=""){
   $id=$_GET['id'];


     echo "Entering in the loopppp" ;

     unset($_SESSION['item'][$id]);

     sort($_SESSION['item']);





 } if($_GET['button']!=""){


      if($_GET['text']!=""){
        
        echo "just enter" ;


    $index=  $_GET['index'];
    $quantity=         $_GET['text'];


    $quan=    $_SESSION['item'][$index][2]      ;
    $price=  $_SESSION['item'][$index][1]     ;

    $price1=$price/$quan ;

    $price=$price + ($quantity * $price1 ) ;
    
    $_SESSION['item'][$index][1]=$price ;

    $_SESSION['item'][$index][2]=$quan + $quantity ;

      }

      else {

      echo "Please Enter the qunatity" ;



      }






 }


  // print_r($_SESSION['item']);


 echo "<table border='1'>";
 echo "<tr><td>Name</td><td>Price</td><td>Quantity</td><td>Remove</td><td>Additional Qunatity You wanna to add</td></tr>" ;

 for($i=0;$i<count($_SESSION['item']);$i++){

        echo "<tr>" ;
        echo "<td>".$_SESSION['item'][$i][0]."</td>"."<td>$".$_SESSION['item'][$i][1]."</td>"."<td>".$_SESSION['item'][$i][2]."</td>" ;
        echo "<td><a href='checkout1.php?id=$i'><input type='button' name='button' value='X' /></a></td><td>
        
        
       <form action='' method='get'><input type='text' name='text'  />

        <input type='hidden' name='index' value=$i />

       <input type='submit' name='button' value='Enter quantity hit submit' />

       </form>
        </td>" ;


        echo "</tr>" ;



 }

echo "</table>" ;

          $total=0 ;

     for($j=0;$j<count($_SESSION['item']);$j++){


          $total=$total+$_SESSION['item'][$j][1];
          




     }

        echo "<br><br>" ;
        



     echo "<h2>hey see here : $" . $total."</h2>" ;





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



