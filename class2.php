<?php

$a =10;
$b = 20;
echo 'add';
echo $a+$b .'<br>';

echo 'sub';
echo $a-$b .'<br>';

echo 'mul';
echo $a*$b .'<br>';

echo 'div';
echo $a/$b .'<br>';


if($a==$b)
{
	echo 'equal';
}
else
{
	echo 'not equal';
}
echo '<br>';


if(($a<$b) or ($a==$b))
{
	echo 'equal';
}
else
{
	echo'not equal';
}
echo '<br>';

for($i=1;$i<=10;$i++)
{
	echo $i*2;
	echo'<br>';
}
echo'<br>';

$i=1;
while($i<=10)
{
	echo $i;
	$i++;
	echo'<br>';
}
echo'<br>';

$i=1;
do 
{
	echo $i;
	echo'<br>';
	$i++;
}
while($i<=10);
	

$colors=array('pink','black','white','red');
foreach($colors as $val)
{
	echo $val;
	echo'<br>';
}

$a=10;
$b=20;
switch('sum')
{
	case 'mul':
	echo $a*$b;
	break;
	case 'sub':
	echo $a-$b;
	break;
	case 'sum':
	echo $a+$b;
	break;
	default:
	echo $a/$b;
	break;
}

?> 
