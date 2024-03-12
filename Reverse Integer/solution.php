<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $result = 0;
        $intMax = pow(2, 31)-1;
        $intMin = -pow(2, 31);

        while($x != 0){
            $digit = $x % 10;
            $x = intval($x / 10);

            if($result > intval($intMax/10) || ($result == intval($intMax/10) && $digit > 7)){
                return 0;
            }
            if($result < intval($intMin/10) || ($result == intval($intMin/10) && $digit < -8)){
                return 0;
            }
            $result = $result*10+$digit;
        }
        return $result;
    }
}
$x1 = 452;
$solution = new Solution();
echo $solution->reverse($x1);
?>