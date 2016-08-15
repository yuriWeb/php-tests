<?php
function checkString($stringName, $string) {
    $invalidStringPattern = '/(^\W+$)/';
    if (preg_match($invalidStringPattern, $string)) {
        echo $stringName . ' is invalid<br>';
    } else {
        echo $stringName . ' is valid<br>';
    }
}
checkString('name', 'Москомспорт'); //invalid
checkString('name', 'Москомспорт hotel'); //valid ???
checkString('address', 'Kirovogradskaya ulica, d. 21, korp. 1'); //valid ???
