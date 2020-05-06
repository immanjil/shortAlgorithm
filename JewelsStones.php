<?php
/**
 * @param String $J
 * @param String $S
 * @return Integer
 */
function numJewelsInStones($J, $S)
{
    $jArr = str_split($J);
    $sArr = str_split($S);
    $totalGems = 0;
    foreach ($sArr as $sItem) {
        if (in_array($sItem, $jArr)) {
            $totalGems++;
        }
    }
    return $totalGems;
}
