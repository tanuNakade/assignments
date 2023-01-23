<?php
class walkthrough
 { 
   public function getval()
    {
	  echo 'getval';
	  
    }  
  } 
class preference extends walkthrough
 {
   public function setval()
    {
       echo 'setval';
    }
  }
$objpref = new preference;
$objpref->setval();
echo "<br>";
$objpref->getval();
echo "<br>";
?>  


<?php
class flower {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The flower is {$this->name} and the color is {$this->color}."; 
  }
}
class rose extends Flower {
  public function message() {
    echo "I love roses. "; 
  }
}

$flw = new rose("rose", "red");
$flw->message();
$flw->intro();
echo "<br>";
?>

<?php
class Jewellery {

    public $price = "We have a fixed price of 1000";

    function printMessage() {

        echo $this->price;
		echo PHP_EOL;

    }

}
class Necklace extends Jewellery
{
	 function print(){

       // echo $this->price;

        echo PHP_EOL;

    }

}
$obj= new Necklace;

echo $obj->price;

echo PHP_EOL;
$obj->printMessage();

 $obj->print();

?>