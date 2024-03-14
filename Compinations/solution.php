<?php
class Solution {
    public $combinations = [];

    function combine($n, $k) {
        $this->backtrack([], 1, $n, $k);
        return $this->combinations;
    }

    function backtrack($current, $start, $n, $k) {
        if (count($current) == $k) {
            $this->combinations[] = $current;
            return;
        }

        for ($i = $start; $i <= $n; $i++) {
            array_push($current, $i);
            $this->backtrack($current, $i + 1, $n, $k);
            array_pop($current);
        }
    }
}

// Test cases
$solution = new Solution();
print_r($solution->combine(4, 2)); // Output: [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]
print_r($solution->combine(1, 1)); // Output: [[1]]
?>