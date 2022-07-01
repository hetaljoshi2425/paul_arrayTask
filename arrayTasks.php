<?php
// function which filter values for get maximum, minimum and odd numbers from given array integer values
function getMaxMinOddnumbers($numberarray = []) {
    $maxNum = max($numberarray); // get maximum number
    $minNum = min($numberarray); // get minimum number
    $even   = array();
    // get odd numbers
    foreach($numberarray as $val) {
        if($val % 2 != 0) {
            $odds[] = $val;
        }
    }
    rsort($odds);
    $result = [];
    $result['maximum'] = $maxNum;
    $result['minimum'] = $minNum;
    $result['odds'] = $odds;
    return $result;
}

$numbers = array(15,18,22,56,19,5);
$getResult = getMaxMinOddnumbers($numbers);
$finalResult = [];
$finalResult['input'] = $numbers;
$finalResult['filteredValues'] = $getResult;
echo json_encode($finalResult);
echo "<pre>";
print_r($finalResult);
?>