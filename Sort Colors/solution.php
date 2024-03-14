<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $left = 0;
        $right = count($nums)-1;
        $curr = 0;

        while($curr<=$right){
            if($nums[$curr] == 0){
              $this->swap($nums, $left, $curr);
              $left++;
              $curr++;  
            }elseif($nums[$curr] == 2){
                $this->swap($nums, $curr, $right);
                $right--;
            }else{
                $curr++;
            }
        }
    }
    function swap(&$nums, $i, $j){
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
}
$nums1 = [2,0,2,1,1,0];

$solution = new Solution();
$solution->sortColors($nums1);
echo "[" . implode(",", $nums1) . "]\n";
?>