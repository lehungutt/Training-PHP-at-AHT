<?php 
$mau =array("xanh","đỏ","cam","vàng");
foreach ($mau as $value) {
 	echo "$value <br>";
 } ?>
 

 <?php 
 //foreach lồng
 $data =[0 =>1,1=>[3=>4,5=>6]];
 foreach ($data as  $val) {
 	if (is_array($val)) {
 		foreach ($val as $v) {
 			echo $v."<br/>";
 		}
 	}else
 	echo $val. "<br/>";
  } ?>