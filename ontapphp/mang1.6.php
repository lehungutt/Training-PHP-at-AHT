<?php 
$hero = array(
    'name'    => 'hùng',
    'age'    => '23',
    'race'    => 'Human',
    'Weapon'    => 'Rocket'
);
 
while( list($key, $value) = each( $hero )) {
    echo "$key - $value <br>";
} ?>