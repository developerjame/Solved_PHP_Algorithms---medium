<?php
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if($n == 0) return 1;
        if($n < 0){
            $x = 1/$x;
            $n = -$n;
        }
        return $this->fastPow($x, $n);
    }
    function fastPow($x, $n){
        if($n == 0) return 1;
        $half = $this->fastPow($x, $n/2);
        if($n%2 == 0){
            return $half*$half;
        }else{
            return $half*$half*$x;
        }
    }
}
$solution = new Solution();
echo $solution->myPow(2.001, -10);
?>