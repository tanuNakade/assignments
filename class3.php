<?php
$colors = array('black','blue','red','white');
echo $colors[1];
echo'<br>';

$names =array('a'=>'raj','b'=>'tanu','c'=>'kiran');
print_r($names);
echo $names['b'];
echo'<br>';

$subjects = array('bsc'=>array('maths','bio','chemistry'),'bca'=>array('php','java'));
print_r($subjects);
echo $subjects['bca'][0];

echo'<br>';

$multi= array('engineer'=>array('cs'=>array(10),'cn'=>array(20),'cm'=>array(30)));
print_r($multi);
echo'<br>';

$names = array('a'=>'raj','b'=>'tanu','c'=>'kiran');
$key= array_keys($names);
print_r($key);
echo'<br>';

$names = array('a'=>'raj','b'=>'tanu','c'=>'kiran');
$values = array_values($names);
print_r($values);
echo'<br>';

$names = array('a'=>'raj','b'=>'tanu','c'=>'tanu');
$valcount = array_count_values($names);
print_r($valcount);
echo'<br>';

$names = array('a'=>'raj','b'=>'tanu','c'=>'kiran');
$flip = array_flip($names);
print_r($flip);
echo'<br>';

$names = array('a'=>'raj','b'=>'tanu','c'=>'tanu');
$uni = array_unique($names);
print_r($uni);
echo '<br>';

$num = array(10,20,30);
echo array_sum($num);
echo '<br>';

$num = array(10,20,30);
$rev = array_reverse($num);
print_r($rev);
echo '<br>';

echo array_search('tanu',$names);
echo '<br>';

$merge = array_merge($num,$names);
print_r($merge);
echo '<br>';

$city= array('a'=>'nagpur','b'=>'gondia');
$rep = array_replace($city,$names);
print_r($rep);
echo '<br>';





?>