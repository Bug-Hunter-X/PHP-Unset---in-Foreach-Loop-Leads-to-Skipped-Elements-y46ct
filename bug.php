function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

//The problem is that using unset() inside a foreach loop that is iterating over an array, modifying the array during iteration. This can lead to unexpected behavior because the loop's internal pointer may skip over elements.