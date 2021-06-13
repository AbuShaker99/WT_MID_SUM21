<html>
<body>
<?php 
$l_ractangle="6";
$W_rectangle="6";
$Perimeter=2*($l_ractangle+$W_rectangle);
$area=$l_ractangle*$W_rectangle;
echo"The parimeter of ractangle is: ".$Perimeter;
echo"<br>The area of ractangle is: ".$area;
if($l_ractangle==$W_rectangle)
{
	echo"<br>The shape is square";
}
else
{
	echo"<br>The shape is not square";
}
?>
</body>
</html>