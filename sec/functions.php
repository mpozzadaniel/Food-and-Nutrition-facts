<?php 
function greeting($variable1, $variable2) {
    echo "How are you $variable1 $variable2?";
}


$firstVariable = "John";
$secondVariable = "today";
greeting($firstVariable, $secondVariable);

function bio($variableAge) {
    
    $constantAge = 25;
    $fullAge = "Constant Age: " . $constantAge . ", Variable Age: " . $variableAge;
    return $fullAge;
}
$myAge = 30;
$fullBio = bio($myAge);
echo $fullBio;

?>