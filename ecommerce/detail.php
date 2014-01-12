
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
        	<ul><li><a href="firstpage.php">Home</a></li>
              <li><a href="sports.php">Sports</a></li>
              <li><a href="cloths.php">Cloths</a></li>
              <li><a href="books.php">Books</a></li>
              <li><a href="#">Movie cd -- </a></li>
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

 error_reporting(0);
 session_start() ;
// echo $_GET['cat'] ;
// echo $_GET['id'] ;
 if($_GET['price']!= "" && $_GET['choice']==""){
/// Item is added and lets get back
           echo "In the first loop ";
           echo $_GET['price'];
           echo $_GET['cat1'];
           echo "</br>" ;
           echo "</br>" ;
           $ar=array($_GET['cat1'],$_GET['price'],1);
           if(count($_SESSION['item'])==0){
              $_SESSION['item'][0]=array($_GET['cat1'],$_GET['price'],1);
           }else{
                array_push($_SESSION['item'],$ar);
           }
          //  print_r($_SESSION['item']);
          
          echo "<br/>";
           echo "Your data is sucessfully Added" ;
           echo "<br/>"      ;

           echo "<a href='firstpage.php'>BACK</a>" ;

            //  echo count($_SESSION['item']);
        //   echo "<a href='destroy.php'>Sesssion destroy</a>";

 }else if($_GET['price']!= "" &&  $_GET['choice']=="yes"){


   //   Adding the data in session variable


      /// we have a index

         $id= $_GET['id'];
         $a=$_SESSION['item'][$id][1]  ;
         $b=$_SESSION['item'][$id][2] ;
         if($b == 1){
         $a=$a+$a;
         }else{
         $a=  $a+($a/$b) ;
         }
         $_SESSION['item'][$id][1]=$a;
         $_SESSION['item'][$id][2]= $_SESSION['item'][$id][2]+1 ;

         echo "</br>" ;

         echo "Your Data sucessfully added To cart " ;

         echo "</br>";

         echo  '<a href="firstpage.php">BACK </a>' ;


         echo "</br>" ;

       //  print_r($_SESSION['item']);

   }



  else{

   ///   oh wanna add item to the cart


//      check for the  Array how to design in the session


    ///


     //  echo "Hey";
   //    print_r($_SESSION['item']);
   //    echo count($_SESSION['item']);


       for($i=0;$i<count($_SESSION['item']);$i++){

       if(in_array($_GET['cat1'],$_SESSION['item'][$i])){

       echo "This is already in your cart you wanna Add Anothe time" ;
       echo '<a href="detail.php?id='.$i.'&cat=sports_data&price=',$_SESSION['item'][$i][1],'&choice=yes&cat1=',$_GET['cat1'],'">YES</a> <a href="firstpage.php">NO</a>';


    }
}




        $data=$_GET['cat'];
        $id=$_GET['id'] ;
      

 mysql_connect("mysql12.000webhost.com","a5091678_akash","akash08ce063");

mysql_select_db("a5091678_ecommer");

        $sql="SELECT * FROM ".$data."_data WHERE last_id=$id" ;

        $result=mysql_query($sql);$a;

        while($row=mysql_fetch_assoc($result)){

        //    fetch the image dynamically
              $result1=    mysql_query("SELECT `name` FROM ".$data."_2 WHERE `sub_id`=".$row['sub_id']."");

                 while($row1= mysql_fetch_assoc($result1)){
                       $a= $row1['name'] ;
                 }


              echo '<td><a href="detail.php?id=',$row['last_id'],'&cat1=',$row['name'],'&price=',$row['price'],'"><img src="'.$a.'/',$row['name'],'.jpg?=',$row['sub_id'],'"  height="200" width="200"alt="" /></a>'."</br>".$row["name"].'</br>'.$row["description"]."
              </br>$".$row['price'].'</td>';
              echo '</br></br><a href="detail.php?id=',$row['last_id'],'&cat1=',$row['name'],'&price=',$row['price'],'">Add to cart</a>' ;
        }


}



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



