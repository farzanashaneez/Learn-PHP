<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>hello world</h1>
    <?php
    echo '<h1 style="display:inline">new</h1><h2 style="display:inline">hello world</h2>';
    echo "Hello, World! This is a basic PHP script.\n";
    // This script demonstrates a simple PHP setup
    ?>
    <h1>Php data types</h1>
    <p>PHP supports several data types:</p>
    <div>
        <ul>
            <li>String</li>
            <li>Integer</li>
            <li>Float (double)</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
        </ul>
    </div>
    <div class="grid-container">
        <div>
            <h2>string</h2>

            <?php
            $string = "Hello, World!";
            echo $string;
            ?>
        </div>
        <div>
            <h2>integer</h2>
            <?php
            $integer = 42;
            echo $integer;
            ?>
        </div>
        <div>
            <h2>float</h2>
            <?php
            $float = 3.14;
            echo $float;
            ?>
        </div>
        <div>
            <h2>boolean</h2>
            <?php
            $boolean = true;
            echo $boolean ? 'true' : 'false';
            ?>
        </div>
        <div>
            <h2>array</h2>
            <?php
            $array = array("apple", "banana", "cherry");
            print_r($array);
            ?>
        </div>
        <div>
            <h2>object</h2>
            <?php
            class Car
            {
                public $color;
                public $model;

                function __construct($color, $model)
                {
                    $this->color = $color;
                    $this->model = $model;
                }
            }

            $myCar = new Car("red", "Toyota");
            echo "My car is a " . $myCar->color . " " . $myCar->model . ".";
            ?>
        </div>
        <div>
            <h2>null</h2>
            <?php
            $nullVar = null;
            echo is_null($nullVar) ? 'Variable is null' : 'Variable is not null';
            ?>
        </div>
    </div>
    <div class="section-divider"></div>
    <section id="string-functions">
        <h2>String Functions</h2>
        <p>PHP provides many built-in functions to manipulate strings. Here are a few examples:</p>
        <ul>
            <li><code>strlen()</code> - Returns the length of a string.</li>
            <li><code>strtoupper()</code> - Converts a string to uppercase.</li>
            <li><code>strtolower()</code> - Converts a string to lowercase.</li>
            <li><code>strpos()</code> - Finds the position of the first occurrence of a substring in a string.</li>
        </ul>
        <h3>Example Usage</h3>
        <div class="flex-container">
            <?php
            $exampleString = "Hello, World!";
            //echo var_dump($exampleString);
            //echo var_dump(null);
            echo "<h2>Original string: " . $exampleString . "</h2><br>";
            echo "Length of string: " . strlen($exampleString) . "<br>";
            echo "Uppercase: " . strtoupper($exampleString) . "<br>";
            echo "Lowercase: " . strtolower($exampleString) . "<br>";
            echo "Position of 'World': " . strpos($exampleString, "World") . "<br>";
            echo "Replaced 'l' with '**': " . str_replace("l", "**", $exampleString) . "<br>";
            echo "Reversed string: " . strrev($exampleString) . "<br>";
            echo "Trimmed string: '" . trim("  Hello, World!  ") . "'<br>";
            ?>
        </div>
        <div class="notes">
            <h3>Notes</h3>
            <p class="note"><strong> global keyword</strong>><br />var_dump is used to print variable type <br /> global keyword is used to get a global variable inside a function.
            <div class="flex-container code-container">$x = 5;<br />
                $y = 10;<br />

                function myTest() {<br />
                global $x, $y;<br />
                $y = $x + $y;<br />
                }<br />

                myTest();<br />
                echo $y; // outputs 15</div>
            </p><br />
            <p class="note">PHP is a loosely typed language, meaning you don't need to declare the data type of a variable when you create it. The type is determined by the value assigned to it.</p>
        </div>
        <div class="notes">
            <p class="note"><strong> $GLOBALS</strong><br />PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
            </p>
            <div class="flex-container code-container">
                $x = 5;<br />
                $y = 10;<br />

                function myTest() {<br />
                $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];<br />
                }<br />

                myTest();<br />
                echo $y; // outputs 15<br />
                <?php
                $x = 5;
                $y = 10;
                $z = 100;
                function myTest()
                {
                    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
                    global $z, $y; // This line is not necessary but shows how to use global variables
                    $z = $z + $y;
                }
                myTest();
                echo "$y"; // outputs 15
                echo $x . " + " . $y . " + " . $z;
                ?>
            </div>
        </div>
        <div class="notes">
            <p class="note">
                <strong> static keyword</strong><br />
                when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
                To do this, use the static keyword when you first declare the variable:
            </p>
            <div class="flex-container code-container">

                function myTest() {<br />
                static $x = 0;<br />
                echo $x;<br />
                $x++;<br />
                }<br />

                myTest(); // outputs 0<br />
                myTest(); // outputs 1<br />
                myTest(); // outputs 2<br />

                <?php
                function staticTest()
                {
                    static $x = 0;
                    echo $x . "<br>";
                    $x++;
                }
                staticTest(); // outputs 0
                staticTest(); // outputs 1
                staticTest(); // outputs 2
                ?>
            </div>
            <!-- <?php
                    echo print("hello world <br>");
                    ?>  -->
            <div class="note">
                <?php
                $name = "Farzana";
                $age = 30;

                echo "<h2>Using dot (.) concatenation:</h2>";
                echo "Name: " . $name . "<br>";
                echo "Age: " . $age . "<br>";

                echo "<h2>Using comma (,) in echo:</h2>";
                echo "Name: ", $name, "<br>";
                echo "Age: ", $age, "<br>";

                // Invalid with print (this will throw an error if uncommented):
                // print "Hello ", $name;
                ?>

            </div>
        </div>

    </section>
    <div class="section-divider"></div>
    <section id="Integer-functions">
        <h2>Integer Functions</h2>
        <p>PHP provides several functions to work with integers:</p>
        <ul>
            <li><code>abs()</code> - Returns the absolute value of an integer.</li>
            <li><code>max()</code> - Returns the highest value in a list of integers.</li>
            <li><code>min()</code> - Returns the lowest value in a list of integers.</li>
            <li><code>rand()</code> - Generates a random integer.</li>
        </ul>
        <h3>Example Usage</h3>
        <div class="flex-container">
            <?php
            $num1 = -10;
            $num2 = 20;
            echo "Absolute value of $num1: " . abs($num1) . "<br>";
            echo "Maximum of $num1 and $num2: " . max($num1, $num2) . "<br>";
            echo "Minimum of $num1 and $num2: " . min($num1, $num2) . "<br>";
            echo "Random number between 1 and 100: " . rand(1, 100) . "<br>";
            ?>
        </div>
    </section>
    <div class="section-divider"></div>
    <section id="Boolean-functions">
        <h2>Boolean Functions</h2>
        <p>PHP provides functions to work with boolean values:</p>
        <ul>
            <li><code>is_bool()</code> - Checks if a variable is a boolean.</li>
            <li><code>boolval()</code> - Converts a value to a boolean.</li>
        </ul>
        <h3>Example Usage</h3>
        <div class="flex-container">
            <?php
            $var1 = true;
            $var2 = 0;
            echo "Is var1 a boolean? " . (is_bool($var1) ? 'Yes' : 'No') . "<br>";
            echo "Is var2 a boolean? " . (is_bool($var2) ? 'Yes' : 'No') . "<br>";
            echo "Boolean value of 1: " . boolval(1) . "<br>";
            echo "Boolean value of 'false': " . boolval('false') . "<br>";
            ?>

        </div>

        <h3>Integer Notation Examples</h3>
        <ul>
            <li>Decimal: <code>$decimal = 123;</code></li>
            <li>Hexadecimal: <code>$hexadecimal = 0x7B;</code></li>
            <li>Octal: <code>$octal = 0173;</code></li>
            <li>Binary: <code>$binary = 0b1111011;</code></li>
        </ul>
        <div class="flex-container">
            <?php
            $decimal = 123;
            $hexadecimal = 0x7B; // 123 in hexadecimal
            $octal = 0173; // 123 in octal
            $binary = 0b1111011; // 123 in binary
            echo "Decimal: $decimal<br>";
            echo "Hexadecimal: $hexadecimal<br>";
            echo "Octal: $octal<br>";
            echo "Binary: $binary<br>";
            ?>
        </div>

    </section>
    <div class="section-divider"></div>
    <section id="Array-functions">
        <h2>Array Functions</h2>
        <p>PHP provides a rich set of functions to manipulate arrays:</p>
        <ul>
            <li><code>count()</code> - Returns the number of elements in an array.</li>
            <li><code>array_push()</code> - Adds one or more elements to the end of an array.</li>
            <li><code>array_pop()</code> - Removes the last element from an array.</li>
            <li><code>array_merge()</code> - Merges one or more arrays.</li>
        </ul>
        <h3>Example Usage</h3>
        <div class="flex-container">
            <?php
            $fruits = array("apple", "banana", "cherry");
            $days = array("Monday", "Tuesday", "Wednesday");
            echo "Number of fruits: " . count($fruits) . "<br>";
            array_push($fruits, "date");
            echo "After adding 'date': ";
            print_r($fruits);
            echo "<br>";
            $lastFruit = array_pop($fruits);
            echo "Removed last fruit: $lastFruit<br>";
            $moreFruits = array("elderberry", "fig");
            $allFruits = array_merge($fruits, $moreFruits);
            echo "Merged fruits: ";
            print_r($allFruits);
            ?>
        </div>
        <div class="flex-container">
            is_int() - Checks if a variable is an integer.<br>
            is_float() - Checks if a variable is a float.<br>
            is_string() - Checks if a variable is a string.<br>
            is_array() - Checks if a variable is an array.<br>
            is_object() - Checks if a variable is an object.<br>
            is_null() - Checks if a variable is null.<br>
            is_bool() - Checks if a variable is a boolean.<br>
            (int)"3.14" - Converts a string to an integer.<br>
            (float)"3.14" - Converts a string to a float.<br>
            (string)123 - Converts an integer to a string.<br>
            (array)123 - Converts an integer to an array.<br>
            (object)123 - Converts an integer to an object.<br>
            <div class="notes">
                <h3>Notes</h3>
                <p class="note">PHP arrays can hold mixed data types, including integers, strings, and even other arrays or objects.</p>
                <p class="note">Associative arrays use named keys that you assign to them.</p>
                <div class="flex-container code-container">
                    $assocArray = array("name" => "John", "age" => 30, "city" => "New York");<br>
                    echo $assocArray["name"]; // Outputs: John<br>
                    echo $assocArray["age"]; // Outputs: 30<br>
                    echo $assocArray["city"]; // Outputs: New York<br>

                </div>
            </div>
            $marks=array(1,2,3,4,5)
            echo marks[0]; // Outputs: 1<br>
            echo marks[1]; // Outputs: 2<br>
            echo marks[2]; // Outputs: 3<br>
            echo marks[3]; // Outputs: 4<br>
            echo marks[4]; // Outputs: 5<br>
            <div class="flex-container code-container">
                <?php
                $marks = array(1, 2, 3, 4, 5);
                echo $marks[0]; // Outputs: 1
                echo $marks[1]; // Outputs: 2
                echo $marks[2]; // Outputs: 3
                echo $marks[3]; // Outputs: 4
                echo $marks[4]; // Outputs: 5
                ?>
            </div>
            //associative array
            <div class="flex-container code-container">
                <?php
                $assocArray = array("name" => "John", "age" => 30, "city" => "New York");
                echo $assocArray["name"]; // Outputs: John
                echo $assocArray["age"]; // Outputs: 30
                echo $assocArray["city"]; // Outputs: New York
                ?>
            </div>
            <div class="note">
                //define
                <h3>Define Constants</h3>
                <p>In PHP, you can define constants using the <code>define()</code> function. Constants are global and can be accessed anywhere in the script.</p>
                <div class="flex-container code-container">
                    <?php
                    define("SITE_NAME", "My Website");
                    echo "Welcome to " . SITE_NAME . "<br>";
                    ?>
                </div>
                <h3>magic constant</h3>
                <p>PHP provides several magic constants that change depending on where they are used. Here are some examples:</p>
                <div class="flex-container code-container">
                    <?php
                    echo "File name: " . __FILE__ . "<br>";
                    echo "Line number: " . __LINE__ . "<br>";
                    echo "Directory: " . __DIR__ . "<br>";
                    echo "Class name: " . __CLASS__ . "<br>";
                    echo "Method name: " . __METHOD__ . "<br>";
                    ?>
                </div>
                <div class="note">
                    //operators
                    <h3>Operators</h3>
                    <p>PHP supports various operators for arithmetic, comparison, and logical operations. Here are some examples:</p>
                    <div class="flex-container code-container">
                        <?php
                        $a = 10;
                        $b = 5;
                        echo "Addition: " . ($a + $b) . "<br>";
                        echo "Subtraction: " . ($a - $b) . "<br>";
                        echo "Multiplication: " . ($a * $b) . "<br>";
                        echo "Division: " . ($a / $b) . "<br>";
                        echo "Modulus: " . ($a % $b) . "<br>";
                        echo "Exponentiation: " . ($a ** $b) . "<br>";
                        ?>
                    </div>
                </div>

            </div>
            <div class="note">
                //conditional operator
                <h3>Conditional Operators</h3>
                <p>PHP supports conditional operators for making decisions in your code. Here are some examples:</p>
                //add if, else, elseif, switch, and ternary operator syntax

                <div class="flex-container code-container">
                    <?php
                    $age = 18;
                    if ($age >= 18) {
                        echo "You are an adult.<br>";
                    } else {
                        echo "You are a minor.<br>";
                    }

                    $isLoggedIn = true;
                    echo $isLoggedIn ? "Welcome back!" : "Please log in.";


                    $age = 18;
                    if ($age >= 18) {
                        echo "You are an adult.<br>";
                    } else {
                        echo "You are a minor.<br>";
                    }

                    $isLoggedIn = true;
                    echo $isLoggedIn ? "Welcome back!" : "Please log in.";

                    // Additional conditional operators
                    $score = 85;
                    if ($score >= 90) {
                        echo "Grade: A<br>";
                    } elseif ($score >= 80) {
                        echo "Grade: B<br>";
                    } elseif ($score >= 70) {
                        echo "Grade: C<br>";
                    } else {
                        echo "Grade: D<br>";
                    }

                    $day = "Saturday";
                    switch ($day) {
                        case "Monday":
                            echo "Start of the week.<br>";
                            break;
                        case "Saturday":
                        case "Sunday":
                            echo "It's the weekend!<br>";
                            break;
                        default:
                            echo "Midweek day.<br>";
                    }

                    ?>
                    //for loop
                    for ($i = 0; $i < 5; $i++) {
                        echo "Iteration: $i<br>" ;
                        }
                        </div>
                </div>
                <div class="note">
                    //loops
                    <h3>Loops</h3>
                    <p>PHP supports various types of loops for iterating over data structures. Here are some examples:</p>
                    <div class="flex-container code-container">
                        <?php
                        // For loop
                        for ($i = 0; $i < 5; $i++) {
                            echo "Iteration: $i<br>";
                        }

                        // While loop
                        $j = 0;
                        while ($j < 5) {
                            echo "While iteration: $j<br>";
                            $j++;
                        }

                        // Foreach loop
                        $fruits = array("apple", "banana", "cherry");
                        foreach ($fruits as $id=>$fruit) {
                            echo "Fruit $id: $fruit<br>";
                            echo "Fruit: $fruit<br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="note">
                    //isset() and empty()
                    <h3>isset() and empty()</h3>
                    <p>PHP provides functions to check if a variable is set or empty:</p>
                    <div class="code">
                        $var1 = "Hello";</br>
                        $var2 = "";</br>
                        echo "Is var1 set? " . (isset($var1) ? 'Yes' : 'No') ;</br>
                        echo "Is var2 set? " . (isset($var2) ? 'Yes' : 'No') ;</br>
                        echo "Is var1 empty? " . (empty($var1) ? 'Yes' : 'No') ;</br>
                        echo "Is var2 empty? " . (empty($var2) ? 'Yes' : 'No') ;</br>

                    </div>
                    <div class="flex-container code-container">
                        <?php
                        $var1 = "Hello";
                        $var2 = "";
                        echo "Is var1 set? " . (isset($var1) ? 'Yes' : 'No') . "<br>";
                        echo "Is var2 set? " . (isset($var2) ? 'Yes' : 'No') . "<br>";
                        echo "Is var1 empty? " . (empty($var1) ? 'Yes' : 'No') . "<br>";
                        echo "Is var2 empty? " . (empty($var2) ? 'Yes' : 'No') . "<br>";
                        ?>

                    </div>
                </div>


            </div>
    </section>
</body>

</html>