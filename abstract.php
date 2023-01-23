<?php
abstract class base
{
	abstract public function getDate();
}
  class child extends base
  { 
	  public function getDate()
	  {
		  echo 'get abstract class';
	  }
  }
$objchild = new child();
//$objchild->getDate();
  
	abstract class xyz
	{
		abstract public function addvalue();
		abstract protected function getvalue();
	}
	class ABC extends xyz{
		public function addvalue()
		{
			return "concrete class";
		}
		public function getvalue()
		{
			return"child class";
		}
	}
	$obj = new ABC;
	echo $obj->getvalue();
?>