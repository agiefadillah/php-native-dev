<?php
$x = 5;
var_dump($x);

echo "<br>";
//String
$x = "Hello world!";
$y = 'Hello world!';


var_dump($x);
echo "<br>";
var_dump($y);

echo "<br>";

//Integer
$x = 5985;
var_dump($x);

echo "<br>";

//Float
$x = 10.365;
var_dump($x);

echo "<br>";

//Boolean
$x = true;
var_dump($x);

echo "<br>";

//Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

echo "<br>";

//Object
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

echo "<br>";

//Null Values
$x = "Hello world!";
$x = null;
var_dump($x);

echo "<br>";

//Change Data Type
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

echo "<br>";

//Strings
echo "Hello";
echo 'Hello';

echo "<br>";

//Ngitung String
echo strlen("Hello world!");

echo "<br>";

//Ngitung Kata
echo str_word_count("Hello world!");
echo "<br>";

//NGITUNG KATA PILIH
echo strpos("Hello world!", "world");
echo "<br>";

//Upper Case
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";

//Lower Case
$x = "Hello World!";
echo strtolower($x);
echo "<br>";

//Ganti Kata
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";

//Reverse String
$x = "Hello World!";
echo strrev($x);
echo "<br>";

//Remove Whitespace
$x = " Hello World! ";
echo trim($x);
echo "<br>";

//Convert String into Array
$x = "Hello World!";
$y = explode(" ", $x);

print_r($y);
echo "<br>";

//Slicing
//Start the slice at index 6 and end the slice 5 positions later:
$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";

//Slice to the End
$x = "Hello World!";
echo substr($x, 6);
echo "<br>";

// Slice From the End
// Use negative indexes to start the slice from the end of the string:
// Get the 3 characters, starting from the "o" in world (index -5):
$x = "Hello World!";
echo substr($x, -5, 3);
echo "<br>";

// Negative Length
// Use negative length to specify how many characters to omit, starting from the end of the string:
// Get the characters starting from the "W" in "World" (index 5) and continue until 3 characters from the end.
// Should end up with "Wor":
$x = "Hello World!";
echo substr($x, 5, -3);
echo "<br>";
