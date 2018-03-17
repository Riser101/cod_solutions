<?php
/*
	This is a demo task.

	Write a function:

	int solution(int A[], int N);

	that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

	For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

	Given A = [1, 2, 3], the function should return 4.

	Given A = [−1, −3], the function should return 1.

	Assume that:

	N is an integer within the range [1..100,000];
	each element of array A is an integer within the range [−1,000,000..1,000,000].
	Complexity:

	expected worst-case time complexity is O(N);
	expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).
*/

// performance : 100%
// correctness : 100%

function solution($A) {
    $res_arr = [];
    for($i=0; $i<count($A); $i++){
        if(isset($res_arr[$A[$i]]) != $A[$i]){
            if($A[$i] < 0) { continue; }
            $res_arr[$A[$i]] = $A[$i];
        }
    }
    sort($res_arr);
    // print_r($res_arr);
    
    if($res_arr[0] != 1 ){
        return 1;
    }
    for($i=0; $i<count($res_arr); $i++){
        if($res_arr[$i] != $i+1){
            return $i+1;
        }
    }
    return $res_arr[count($res_arr)-1]+1;
}

/*

performance : 50%
correctness : 100%

function solution($A) {
    $res_arr = [];
    for($i=0; $i<count($A); $i++){
        if(isset($res_arr[$A[$i]]) != $A[$i]){
            if($A[$i] < 0) { continue; }
            $res_arr[$A[$i]] = $A[$i];
        }
    }
    sort($res_arr);
    // print_r($res_arr);
    
    if($res_arr[0] != 1 ){
        return 1;
    }
    for($i=0; $i<count($res_arr); $i++){
        if($res_arr[$i] != $i+1){
            return $i+1;
        }
    }
    return $A[count($A)-1]+1;
}
/*



/*

performance : 25%
correctness : 80%

function solution($A) {
    $res_arr = [];
    for($i=0; $i<count($A); $i++){
        if(isset($res_arr[$A[$i]]) != $A[$i]){
            $res_arr[$A[$i]] = $A[$i];
        }
    }
    sort($res_arr);
    for($i=0; $i<count($res_arr); $i++){
        if($res_arr[$i] != $i+1){
            return (int)$i+1;
        }
    }
    return $A[count($A)-1]+1;
}

*/