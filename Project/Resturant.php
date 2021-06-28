<?php  
$hotels="";
$err_hotels="";
$hasError=false;

$member="";
$err_member="";
$hasError=false;







	if(isset($_POST["submit"]))
	{
		
	
//--Resturant Area--//
           
             if (!isset($_POST["hotels"]))
            {
                $hasError=true;
                $err_hotels="Please Select Area For Hotels!";
            }
            else
            {
                $hotels=$_POST["hotels"];
            }
			
//---Membership---//
			if (!isset($_POST["member"]))
            {
                $hasError=true;
                $err_member="Please Select Membership!";
            }
            else
            {
                $member=$_POST["member"];
            }


		
			echo "hotels: ".htmlspecialchars($_POST["hotels"])."<br>";
			echo "member: ".htmlspecialchars($_POST["member"])."<br>";
			
			
		
	}
	
?>

<html>
 <head>   
 </head>
 <body><center>
       <table>
	   <form action="" method="post">
				<p><h1>Resturent<h1></p>
                 <tr>
                <td><span>Please Select Your Area:</span></td>
                <td></td>
                <td>
                <select name="hotels">
                    <option disabled selected>None</option>
                    <?php
                        $ht= array("Dhaka","Chottogram","Barishal","Kuakata","Bandarban","Rangamati","Khagrachori","Sylhet");
                        for($n=0;$n<count($ht);$n++)
                        {
                            echo "<option>$ht[$n]</option>";
                        }
                    ?>
                    </select>
                    </td>
					<td><span> <?php echo $err_hotels;?> </span></td>
                
				
				<td><span>Please Select Your Membership:</span></td>
                <td></td>
                <td>
                <select name="member">
                    <option disabled selected>None</option>
                    <?php
                        $mp= array("Premium","Morderate","Standard");
                        for($n=0;$n<count($mp);$n++)
                        {
                            echo "<option>$mp[$n]</option>";
                        }
                    ?>
                    </select>
                    </td>
					<td><span> <?php echo $err_member;?> </span></td>
				
                 </tr>
       </table>
	   <td><input type="submit" name="submit" ></td> 
	   
	   </center>
	   
 </body>
 </html>
