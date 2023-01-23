<?php
$str = "PHP is server side scripting langugae";
echo strlen($str);
echo '<br>';

echo strtolower($str);
echo '<br>';

echo strtoupper($str);
echo '<br>';

echo lcfirst('Tanu');
echo '<br>';

echo ucfirst('tanu');
echo '<br>';

echo ucwords('tanuja nakade');
echo '<br>';

echo ltrim('      tanuja');
echo '<br>';

echo rtrim('tannu     ');
echo '<br>';

echo trim('     tanuja nakade     ');
echo '<br>';

echo md5('tanu@123');
echo '<br>';

$s= " php
      mysql
	  js";
echo nl2br($s);
echo '<br>';

$exp= explode(' ',$str);
print_r($exp);
echo '<br>';

$colors = array('red','white','blue','black');
echo implode('-',$colors);
echo '<br>';

echo join(' ',$colors);
echo '<br>';	  
	  
echo str_word_count($str);
echo '<br>';

echo str_replace('PHP','java',$str);
echo '<br>';

echo str_ireplace('php','java',$str);
echo '<br>';

echo str_repeat('tannu ',3);
echo '<br>';

echo strip_tags('<p>tag removed</p>');
echo '<br>';

$email = 'tanunakade@gmail.com';
echo strchr($email,'@');
echo '<br>';

$n1 = 'hello';
$n2 = 'hello';
echo strcasecmp($n1,$n2);
echo '<br>';

echo strcmp('$n1','$n2');
echo '<br>';

echo number_format(10.2485,2);
echo '<br>';

echo strpos($str,'side');
echo '<br>';

$str = "PHP is server side scripting langugae side";
echo strrpos($str,'side');
echo '<br>';

$str = "PHP is server side scripting langugae side";
echo stripos($str,'side');
echo '<br>';

$str = "PHP is server side scripting langugae side";
echo strripos($str,'side');
echo '<br>';

echo strstr($email,'@');
echo '<br>';

echo stristr($email,'@');
echo '<br>';

echo strrev($email);
echo '<br>';

echo strtr("Hilla Warld","ia","eo");
echo '<br>';

echo substr("Hello world",6);
echo '<br>';

echo wordwrap($str,13,"<br>\n");
echo '<br>';

print_r (get_html_translation_table());
echo '<br>';
?>