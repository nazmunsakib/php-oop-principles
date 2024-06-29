<?php
require_once __DIR__ . '/includes/Minimal_Classes.php';

/**
 * Initialize the mobile class
 */

echo "<h3>Mobile details from minimal class!</h3>";

$mobile = new Mobile('6', 'Apple', '20,099' );
// echo $mobile->brand_name() .'</br>';
// echo $mobile->display() .'</br>';
// echo $mobile->price() .'</br>';

$mobile_data = $mobile->mobile_data();

foreach($mobile_data as $key => $mobile){
    echo '<p>'.ucfirst($key).' : '.$mobile.'</p>';
}

