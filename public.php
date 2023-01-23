<?php
class component
{
public function getval()
  { 
    echo 'done';
	echo "<br>";
   }
private function setval()
  {
    echo 'yes';
   }
public function returnval()
{
   $this->setval();
    echo "<br>";
   $this->add();
   echo "<br>";
}  
function add()
	{
      $a=10;
      $b=20;
      $c=$a+$b;
      echo 'addition='.$c; 
      echo "<br>";
	}
}
$objcom= new component;
$objcom->getval();    
$objcom->returnval();
?>