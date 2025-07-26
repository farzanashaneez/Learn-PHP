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
</body>

</html>