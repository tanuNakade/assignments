<?php
echo 'php is a sever side scripting langugae';
echo '<br>';

$a='hello';
echo $a;
echo '<br>';

$f=10.01;
echo $f;
echo '<br>';
$i=false;
echo $i;
echo '<br>';
$m=true;
echo $m;
echo '<br>';
$names=array('tannu','trupti','kiran');
print_r($names);
echo '<br>';

class comp
{
	function makeText()
	{
		echo 'yes done';
	}
}
$obj = new comp;
$obj->makeText();	
?>
