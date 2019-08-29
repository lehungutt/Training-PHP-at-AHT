<?php 
$diem =9;
if($diem<=10){
if($diem<4){
    echo "Học lại";}
elseif($diem>=4 && $diem<5.5){
    echo "loại D";}
elseif($diem>=5.5 && $diem<7){
    echo "Loại C";}
elseif ($diem>=7 && $diem<8.5) {
    echo "Loại B";}
elseif ($diem>=8.5 && $diem<=10)
{
    echo "Loại A";}
}
else{
    echo "Điểm không hợp lệ";}

 ?>
 