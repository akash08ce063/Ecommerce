<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	Coffeelike by nodethirtythree + Templated.org
	http://templated.org/ | @templatedorg
	Released under the Creative Commons Attribution 3.0 License.
	
	Note from the author: These templates take quite a bit of time to conceive,
	design, and finally code. So please, support our efforts by respecting our
	license: keep our footer credit links intact so people can find out about us
	and what we do. It's the right thing to do, and we'll love you for it :)
	
--><html xmlns="http://www.w3.org/1999/xhtml"><head><meta name="keywords" content=""><meta name="description" content=""><meta http-equiv="content-type" content="text/html; charset=utf-8"><title>Coffeelike | Designed by nodethirtythree + Templated.org</title><link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css"><link href="style.css" rel="stylesheet" type="text/css"></head><body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="#">Coffeelike</a>
						</h1>
					</div>
					<div id="nav">
						<ul><li class="first active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
							<li>
								<a href="#">Portfolio</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li class="last">
								<a href="#">Contact</a>
							</li>
						</ul><br class="clear"></div>
				</div>
				<div id="main">
					<div id="sidebar">
						<h3>
							Feugiat sem praesent
						</h3>
						<p>
							Aliquam sed vulputate curabitur convallis dignissim. Phasellus sed convallis condimentum et amet
							hendrerit neque sit euismod.
						</p>
						<h3>
							Suscipit commodo lacinia
						</h3>
						<ul class="linkedList"><li class="first">
								<a href="#">Ridiculus dolore felis</a>
							</li>
							<li>
								<a href="#">Cras velit vestibulum penatibus</a>
							</li>
							<li>
								<a href="#">Eleifend porttitor auctor</a>
							</li>
							<li>
								<a href="#">Semper erat sed consequat</a>
							</li>
							<li>
								<a href="#">Integer egestas sodales</a>
							</li>
							<li class="last">
								<a href="#">Aliquet cras odio tristique</a>
							</li>
						</ul></div>
					<div id="content">
						<div id="box1">
                                                ////////////////   Here we try to put whole page //////////////

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
      <div id="box2">
							<h3>
								Primis dolor fringilla porta
							</h3>
							<ul class="imageList"><li class="first">
									<img class="left" src="images/pic2.jpg" width="80" height="80" alt=""><span>Quis faucibus mauris quis consectetur lobortis parturient sit turpis scelerisque neque aliquet.</span>
								</li>
								<li>
									<img class="left" src="images/pic1.jpg" width="80" height="80" alt=""><span>Lobortis malesuada penatibus porta varius ligula blandit sit dolor mattis morbi ullamcorper posuere tempus.</span>
								</li>
								<li class="last">
									<img class="left" src="images/pic2.jpg" width="80" height="80" alt=""><span>Diam nunc turpis placerat imperdiet ac cras ac sociis aliquam sed lacinia augue suspendisse.</span>
								</li>
							</ul></div>
      <div id="box3">
							<h3>
								Magnis felis
							</h3>
							<p>
								Vulputate magna nibh augue. Rutrum nibh sodales porta etiam.
							</p>
							<ul class="linkedList"><li class="first">
									<a href="#">Lobortis fringilla dictum cras</a>
								</li>
								<li>
									<a href="#">Erat primis accumsan facilisis</a>
								</li>
								<li>
									<a href="#">Laoreet in in magna</a>
								</li>
								<li>
									<a href="#">Porta a vulputate placerat</a>
								</li>
								<li class="last">
									<a href="#">Neque rhoncus rhoncus iaculis</a>
								</li>
							</ul></div>
						<br class="clear"></div>
					<br class="clear"></div>
			</div>
			<div id="copyright">
				© Your Site Name | Design: <a href="http://templated.org/free-css-templates/coffeelike/">Coffeelike</a> by <a href="http://nodethirtythree.com">nodethirtythree</a> + <a href="http://templated.org/">Templated.org</a> | Sponsor: <a href="http://www.4templates.com/">Business Website Templates</a>
			<!--%@##--> Design provided by <a href="http://www.freewebtemplates.com">Free Website Templates</a>.<!--##@%--></div>
		</div>
    </body></html>
