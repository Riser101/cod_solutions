<?php

// correctness : 100%
// performance : 75%

function solution($A, $B, $K) {
    $div_tracker = (int)($B/$K)-(int)(($A-1)/$K); 
    if($A==0){ $div_tracker++; }
    return $div_tracker;
}

echo solution(1, 10000000, 2);

/* correctness : 100%
   performance : 0%

function solution($A, $B, $K) {
    $div_tracker = 0;
    for($i=$A; $i<=$B; $i++){
        if($i%$K === 0){
            $div_tracker++;
        }
    }
    return $div_tracker;
}
*/