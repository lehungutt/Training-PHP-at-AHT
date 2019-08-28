<?php 
//mang không tuần tự
$mang = array('css'=>'CSS','php'=>'PHP',25=>100);
echo '<pre>';
var_dump($mang);
echo '</pre>';
 ?>
 <?php 
 //mảng đa chiều
 $mang = array('php'=>array('wp'=>'wordpress','joomla'=>'Joomla','drupal'=>'Drupal','mt'=>'Magento'),'asp'=>array('netnuke'=>'Dotnetnuke','kentico'=>'Kentico CMS'));
 	echo '<pre>';
 	print_r($mang);
 	echo '</pre>'; ?>