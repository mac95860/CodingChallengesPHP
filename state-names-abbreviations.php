<?php
// Create a functino that filters out an array of state names into two categories based on the second parameter
// 1. Abbreviations: "abb"
// 2. Full names: "full"

function filterStateNames($arr, $type) {
	$newArr = [];
	foreach ($arr as $value) {
		if($type == "abb" && strlen($value) < 3) {
			array_push($newArr, $value);
		} else if ($type == "full" && strlen($value) > 3) {
			array_push($newArr, $value);
		}
	}
	return $newArr;
}

print_r (filterStateNames(["Arizona", "CA", "NY", "Nevada"], "abb")); // ["CA", "NY"]
echo "<br>";
print_r (filterStateNames(["Arizona", "CA", "NY", "Nevada"], "full")); // ["Arizona", "Nevada"]
echo "<br>";
print_r (filterStateNames(["MT", "NJ", "TX", "ID", "IL"], "abb")); // ["MT", "NJ", "TX", "ID", "IL"]
echo "<br>";
print_r (filterStateNames(["MT", "NJ", "TX", "ID", "IL"], "full")); // []
?>