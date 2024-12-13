```php
function my_function($param1, $param2 = null) {
  if (!isset($param2)) {
    // Handle the case where $param2 is not provided
    $param2 = 'default value';
  } else if ($param2 === null) {
    //Explicit null handling
    $param2 = 'explicit null value'; //or throw an exception
  }
  // Use $param1 and $param2
  return $param1 . ' ' . $param2;
}

//Example Usage
echo my_function('Hello'); // Output: Hello default value
echo my_function('Hello', 'World'); //Output: Hello World
echo my_function('Hello', null); // Output: Hello explicit null value
```