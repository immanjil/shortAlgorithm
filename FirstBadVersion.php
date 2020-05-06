<?php

/**
 * returns if version is bad
 *
 * @param $n
 * @return bool
 */
function isBadVersion($n)
{
    $badVersion = range(4, 1000);
    if (in_array($n, $badVersion)) {
        return true;
    }
    return false;
}

/**
 * returns first bad version for given version
 *
 * @param Integer $n
 * @return Integer
 */
function firstBadVersion($n)
{
    $left = 1;
    $right = $n;
    while ($left < $right) {

        $mid = floor($left + ($right - $left) / 2);

        if (isBadVersion($mid)) {
            $right = $mid;
        } else {
            $left = $mid + 1;
        }
    }
    return $left;
}

// Test cases to be run
$testCases = [5, 100, 444];
foreach ($testCases as $testCase) {
    $sol = firstBadVersion(5);
    echo "Then $sol is the first bad version for input: $testCase" . PHP_EOL;
}
