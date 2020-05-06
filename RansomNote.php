<?php
/**
 * @param String $ransomNote
 * @param String $magazine
 * @return Boolean
 */
function canConstruct($ransomNote, $magazine)
{
    if (empty($ransomNote)) {
        return true;
    }
    $ransomNote = str_split($ransomNote);
    $magazine = str_split($magazine);
    $rC = array_count_values($ransomNote);
    $rM = array_count_values($magazine);
    foreach ($rC as $k => $v) {
        if (!isset($rM[$k]) || $rM[$k] < $v) {
            return false;
        }
    }
    return true;
}
