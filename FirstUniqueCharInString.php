<?php
/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s)
{
    if (empty($s)) {
        return -1;
    }
    $sArr = str_split($s);
    $sCount = array_count_values($sArr);
    foreach ($sCount as $k => $v) {
        if ($v === 1) {
            return array_search($k, $sArr);
        }
    }
    return -1;

}
