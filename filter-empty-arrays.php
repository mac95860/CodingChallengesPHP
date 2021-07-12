<!-- I am trying to filter out empty arrays from an array. 
In other words, I want to transform something that looks like this: ["a", "b", [], [], [1, 2, 3]] 
to look like ["a", "b", [1, 2, 3]].  -->

<?php
    function removeEmptyArrays($arr) {
        print_r(
            array_values(
                array_filter($arr, "no_empty")
            )
        );
      }
      
      function no_empty($v) {
        if (count($v) == 0) {
          return FALSE;
        } else {
          return TRUE;
        }
      }

      removeEmptyArrays([1, 2, [], 4]); // [1, 2, 4]
      removeEmptyArrays([1, [], [], 4]); // [1, 4]
      removeEmptyArrays([[], [], [], []]); // []
?>