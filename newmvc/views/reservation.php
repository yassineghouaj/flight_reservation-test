<?php
   
	

			
         $np=$_POST['np'];
         $idf=$_POST['idf'];
		 $idvr=$_POST['idvr'];
		 $dater=$_POST['dates'];
		
$count=1;
echo"<div class=\"scrold\">";
echo "<form action=\"ticket\" method=\"post\" ";
while($count<=$np)
			{
				
			
					echo "<p><strong>PASSENGER ".$count."<strong></p>";
					echo "	<table class=\"table table-striped table-dark\">";
					echo "<tr>";
					echo "<td> Name</td>";
					echo "<td> Age</td>";
					echo "<td> Gender</td>";
					
					echo "<td> phone number</td>";
					echo "</tr>";
					echo "<tr>";



					echo "<td><input type=\"text\" name=\"nom$count\" required></td>";
					echo "<td><input type=\"number\" name=\"age$count\" required></td>";
                    
					echo "<td>";
					echo "<select name=\"gender$count\">";
  					echo "<option value=\"male\">Male</option>";
  					echo "<option value=\"female\">Female</option>";
  					echo "<option value=\"other\">Other</option>";
  					echo "</select>";
                      echo "<td><input type=\"number\" name=\"phone$count\" required></td>";
  					echo "</td>";
  					
					echo "</tr>";
					
					echo "<td><input type=\"hidden\" name=\"idvr\" value=\" $idvr\" ></td>";
                   echo "<td><input type=\"hidden\" name=\"idp\" value=\" $idv\" ></td>";
				   echo "<td><input type=\"hidden\" name=\"np\" value=\" $np\" ></td>";
				    echo "<td><input type=\"hidden\" name=\"dater\" value=\" $dater\" ></td>";
					echo "</table>";
                   
					echo "<br><hr>";
					$count=$count+1;
				}

            echo "<input type=\"submit\" value=\"book\" name=\"submit\">";


              echo"</form>";

 echo"</div>";

		
		?>