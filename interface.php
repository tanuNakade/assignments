<?php
interface base{
	public function printval();
	public function getval();
}
 class child implements base{
	 
	 function __construct(){
		 echo 'called construct'."<br>";
	 } 
	  function __destruct(){
		  echo 'called destruct'."<br>";
	  }
	 
	 function printval(){
	 echo 'print value'."<br>";
	 }
	 function getval(){
		 echo 'echo value';
	 }
 }
 
 $obj = new child;
 $obj->printval();
 //obj->getval();
?>