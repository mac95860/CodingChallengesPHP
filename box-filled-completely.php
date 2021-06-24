<!-- Create a function that checks if the box is completely filled with the asterisk symbol *. -->
<?php
    $array1 = [
        '######', 
		'#****#', 
		'#****#', 
		'#****#', 
		'#****#', 
		'######'
    ];

    $array2 = [
        '#####', 
		'#* *#', 
		'#***#', 
		'#***#', 
		'#####'
    ];

    function completelyFilled($arr) {
        return array_product(
            array_map(function ($str){
                return strpos($str, ' ') ? false : true;
            },
            $arr)
        ); 
    }

    completelyFilled($array1); // true
    completelyFilled($array2);  // false
?>