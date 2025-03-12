<?php
$a = 15;
$b = 7;

echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";
?>

<?php
$num = 10; // Change this value to test

if ($num % 2 == 0) {
    echo "$num is even.";
} else {
    echo "$num is odd.";
}
?>

<?php
$num = -5; // Change this value to test

if ($num > 0) {
    echo "$num is positive.";
} elseif ($num < 0) {
    echo "$num is negative.";
} else {
    echo "$num is zero.";
}
?>
<?php
$num = -5; // Change this value to test

if ($num > 0) {
    echo "$num is positive.";
} elseif ($num < 0) {
    echo "$num is negative.";
} else {
    echo "$num is zero.";
}
?>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo "$i<br>";
    }
}
?>
<?php
$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    $next = $first + $second;
    $first = $second;
    $second = $next;
    
    if ($next % 2 == 0) {
        echo "$next<br>";
    }
}
?>
<?php
function greet($name) {
    return "Hello, $name!";
}

echo greet("John");
?>
<?php
function square($num) {
    return $num * $num;
}

echo "Square of 4 is: " . square(4);
?>
<form method="POST" action="process.php">
    <input type="text" name="user_input">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = htmlspecialchars($_POST['user_input']);
    echo "You entered: " . $input;
}
?>
