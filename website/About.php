<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">

</head>
<body>
<?php
    include 'navbar.php';
    ?>
    <h1>About Page</h1>
    <?php
    // error_reporting(0);
    $file= fopen("about.txt", "r");
     if ($file){
        while (($line = fgets($file)) !== false) {
            echo "<p>" . $line . "</p>";
        }
    }
    ?>
    <?php
    //file write
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $content = "writing content";
        $file = fopen("about.txt", "a");
        if ($file) {
            fwrite($file, $content . "\n");
            fclose($file);
            echo "<p>Content added successfully!</p>";
        } else {
            echo "<p>Error opening file.</p>";
        }
    }

    ?>
</body>
</html>