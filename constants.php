<?php

//two different ways to declare a constant in PHP. Using $ sign isn't needed to declare a constant. Name of a constant  must be in UPPERCASE. It is used for bolean purpose usually. 

 const ORDER_STATUS = 'Received'; // one way

define('PAYMENT_STATUS', 'Paid'); // other way

echo ORDER_STATUS . '<br>';

echo PAYMENT_STATUS;
echo '<br>';

// Magic Constants
// There are lots of Magic Constants out there

echo __LINE__;
echo '<br>';

echo __FILE__;
echo '<br>'; 

?>