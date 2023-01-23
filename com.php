<?php
class component
  {
    function getval()
      {
        return 'Done';

	   }
	function getva()
	  {
       return 'submit';
	 
	  }	
    function add()
	{
      $a=10;
      $b=20;
      $c=$a+$b;
      echo 'addition='.$c; 
      echo "<br>";	  
    }
	function sub()
	{
      $a=10;
      $b=20;
      $c=$a-$b;
      echo 'subraction='.$c; 
      echo "<br>";
	}
  }
   
$objcomp = new component;
$res = $objcomp->getva();
$result= $objcomp->getval();
$objcomp->add();
$objcomp->sub();
echo $result;
echo "<br>";
echo $res;




?>