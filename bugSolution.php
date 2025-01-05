function foo(array $arr) {
  $newArr = [];
  foreach ($arr as $value) {
    if ($value !== null) {
      $newArr[] = $value;
    }
  }
  return $newArr;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 6 )

//Solution: Create a new array to store the values instead of modifying the original array directly within the loop.