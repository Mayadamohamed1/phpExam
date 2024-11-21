<?php
//1- Write a PHP script using a nested for loop that creates a chessboard.
echo "1-";
$size = 8;
echo "<table style='border-collapse: collapse; width: 400px; height: 400px;'>";
for ($row = 0; $row < $size; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $size; $col++) {
        $color = ($row + $col) % 2 == 0 ? "black" : "white";
        echo "<td style='background-color: $color; border: 1px solid black;'></td>";
    }
    echo "</tr>";
}
echo "</table>";
echo"<hr>";
echo"2-";
echo"<br>";
//2-1 write a PHP program to print this shape (using nested loop)
$rows = 4;


for ($i = 0; $i <= $rows; $i++) {

    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}


for ($i = $rows - 1; $i >= 0; $i--) {

    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;";
    }

    for ($k = 0; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
//2-2 write a PHP program to print this shape (using nested loop)
for($i=1; $i<=5; $i++){   
    for($j=1; $j<=$i; $j++){   
    echo ' * ';   
    }  
    echo '<br>';   
    }  
    for($i=5; $i>=1; $i--){   
    for($j=1; $j<=$i; $j++){  
    echo ' * ';   
    }   
    echo '<br>';   
    }   
    
    echo "<hr>";
    //2-3write a PHP program to print this shape (using nested loop)
    for($i=5; $i>=1; $i--)  
    {  
    if($i%2 != 0)  
    {  
    for($j=5; $j>=$i; $j--)  
    {  
    echo "* ";  
    }  
    echo "<br>";  
    }  
    }  
    for($i=2; $i<=5; $i++)  
    {  
     if($i%2 != 0)  
    {  
     for($j=5; $j>=$i; $j--)  
    {  
    echo "* ";  
    }  
    echo "<br>";  
    }  
    }  
echo"<hr>";
    //3- $array = [2,4,3,1,6,7,5,8,0,9] .Write a PHP program to sort this array to ASC and also sort it as DESC .(without using built in functions)
    echo "3-";
    echo "<br>";
    $array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];


    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    
    echo "Array Sorted in ASC: ";
    print_r($array);
    echo "<br>";

    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    
    echo "Array Sorted in DESC: ";
    print_r($array);
    
    //4-write a program to calculate the avg of numbers array.
    echo "<hr>";
    echo "4-";
   $array = [10,20,30];

$sum = 0;
foreach ($array as $num) {
    $sum += $num;
}
$average = $sum / count($array);

echo "Average: " . $average;
echo "<hr>";
echo "5-";
//5-write a program to filter even numbers from an array, delete all even numbers.
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];


$newArray = [];
foreach ($array as $num) {
    if ($num % 2 != 0) { 
        $newArray[] = $num;
    }
}

echo "Array After Deleting Even Numbers: ";
print_r($newArray);
echo "<hr>";
echo "6-";
//6-write a program to find the max number of numbers group [10,30,20],using if.
$numbers = [10, 30, 20];
$max = $numbers[0];
if ($numbers[1] > $max) {
    $max = $numbers[1];
}
if ($numbers[2] > $max) {
    $max = $numbers[2];
}

echo "The Maximum Number is: " . $max;
echo "<hr>";
echo "7-";
//7-Write a PHP script to increment date by one monthSample date : 2012-12-21Expected Output : 2013-01-21.
$date = '2012-12-21';  
$dateObj = new DateTime($date);
$dateObj->modify('+1 month');  
echo "New Date: " . $dateObj->format('Y-m-d');  
echo "<hr>";
echo "8-";
//8-Write a PHP script to get the number of the month before the current month.
$currentMonth = date('m');  //=>11
$previousMonth = date('m', strtotime('-1 month'));  //=>10
echo "Previous Month: " . $previousMonth;
//9-Write a PHP script that checks if a string contains another string.(using regular-expression).
echo "<hr>";
echo "9-";
$x = "Hello, welcome to PHP!";
$y = "welcome";
if (preg_match("/$y/", $x)) {
    echo "The string contains '$y'.";
} else {
    echo "The string does not contain '$y'.";
}
echo "<hr>";
echo "10-";
//10-Write a function to check whether a number is prime or not.Note: A prime number (or a prime) is a natural number greater than 1 that has nopositive divisors other than 1 and itself.
function isPrime($num) {
    if ($num <= 1) {
        return false;  
    }

    for ($i = 2; $i <= sqrt($num); $i++) {  
        if ($num % $i == 0) {  
            return false;
        }
    }
    return true;  
}

$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

