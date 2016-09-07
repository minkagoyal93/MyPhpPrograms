//armstrong or not


<?php
$num =$_POST['number'];
$sum=0;
$y=$num;
while($num>=1)
{
$num1=$num%10;
$num=$num+($num1*$num1*$num1);
$num=$num/10;
}
if($y==$num)
echo "is a armstrong number";
else 
echo "not a armstrong number"
?>

