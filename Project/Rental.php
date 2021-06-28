<?php  
$apartment="";
$err_apartment="";
$hasError=false;

$member="";
$err_member="";
$hasError=false;

$price="";
$err_price="";
$hasError=false;





	if(isset($_POST["submit"]))
	{
		
	
//--Aparment Area--//
           
             if (!isset($_POST["apartment"]))
            {
                $hasError=true;
                $err_apartment="Please Select Area For Aparment!";
            }
            else
            {
                $apartment=$_POST["apartment"];
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

//Price//
if (!isset($_POST["price"]))
            {
                $hasError=true;
                $err_price="Please Select Your Price Range!";
            }
            else
            {
                $price=$_POST["price"];
            }
		
			echo "apartment: ".htmlspecialchars($_POST["apartment"])."<br>";
			echo "member: ".htmlspecialchars($_POST["member"])."<br>";
			echo "price: ".htmlspecialchars($_POST["price"])."<br>";
			
		
	}
	
?>

<html>
 <head>   
 </head>
 <body><center>
       <table>
	   <form action="" method="post">
				<p><h1>Rent Apartment<h1></p>
                 <tr>
                <td><span>Please Select Your Area:</span></td>
                <td></td>
                <td>
                <select name="apartment">
                    <option disabled selected>None</option>
                    <?php
                        $apt= array("Dhaka","Chottogram","Barishal","Kuakata","Bandarban","Rangamati","Khagrachori","Sylhet");
                        for($n=0;$n<count($apt);$n++)
                        {
                            echo "<option>$apt[$n]</option>";
                        }
                    ?>
                    </select>
                    </td>
					<td><span> <?php echo $err_apartment;?> </span></td>
                
				
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
				
					  
					  
					  <td><span>Please Select Price Range:</span></td>
                <td></td>
                <td>
                <select name="price">
                    <option disabled selected>None</option>
                    <?php
                        $pr= array("0-4999","5000-9999","10000+");
                        for($n=0;$n<count($pr);$n++)
                        {
                            echo "<option>$pr[$n]</option>";
                        }
                    ?>
                    </select>
                    </td>
					<td><span> <?php echo $err_price;?> </span></td>
                 </tr>
       </table>
	   <td><input type="submit" name="submit" ></td> 
	   
	   </center>
	   
 </body>
 </html>
