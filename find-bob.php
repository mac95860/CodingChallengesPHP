<?php

// Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array
// If Bob is not in the array, return -1.

    function findBob($names) {
        if(in_array("Bob", $names)) {
            return array_search("Bob", $names);
        } else {
            return -1;
        }
    }

    echo( findBob(["Bob", "Layla", "Kaitlyn", "Patricia"]) );
    echo( findBob("Jimmy", "Layla", "James") );
?>