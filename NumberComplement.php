<?php
/**
 * @param Integer $num
 * @return Integer
 */
function findComplement($num)
{
    $bNum = decbin($num);
    $trans = array("0" => "1", "1" => "0");
    $returnNum = strtr($bNum, $trans);
    return bindec($returnNum);
}
