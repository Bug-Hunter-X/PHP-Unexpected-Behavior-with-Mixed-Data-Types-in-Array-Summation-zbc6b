```php
<?php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = []; // Empty array
echo calculateSum($numbers); // Output: 0 (Correct)

$numbers = [1, 'a', 3]; // Array with a string value
echo calculateSum($numbers); // Output: 4 (Incorrect - Notice)

?>
```