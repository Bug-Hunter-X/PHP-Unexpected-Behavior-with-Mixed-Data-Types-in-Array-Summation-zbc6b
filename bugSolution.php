```php
<?php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately - e.g., throw an exception, skip the element, or log a warning
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = [1, 'a', 3];
echo calculateSum($numbers); // Output: 4 (Warning: Non-numeric value encountered)

?>
```