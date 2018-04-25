<?php
// valid strings
$welcome_message="How are you?";

//Declare the above in two more ways

$welcome_message1="Im okay.";
$welcome_message_array="You're sure ?";
$welcome_message1=<<<WMK
Arwings Showed Paul an array
WMK;
//Display every word of the string above in a new line.

//split this string
$welcome_message_array=explode(' ',$welcome_message);
foreach ($welcome_message_array as $word){
  echo "{$word}<br>";

}

?>
