# PHP Unexpected Behavior with Mixed Data Types in Array Summation

This repository demonstrates an uncommon code error in PHP related to the loose typing system and its impact on array operations.  Specifically, the `calculateSum` function showcases unexpected results when attempting to sum an array containing mixed data types (integers and strings).  The error arises from PHP's implicit type conversion, which leads to incorrect summation when strings are encountered.

## Bug Description

The `calculateSum` function is intended to add all numbers in an array. However, if the array contains a non-numeric value (e.g., a string), the function produces an unexpected result due to PHP's type juggling.  Instead of throwing an error, it attempts to convert the string to an integer, sometimes leading to incorrect results or notices. 

## Solution

The bug is resolved by explicitly checking the data type of each element in the array before attempting the addition. This ensures that only numeric values are summed.