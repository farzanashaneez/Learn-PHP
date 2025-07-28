<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Super Globals in PHP</title>
  <link rel="stylesheet" href="/style.css" />
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="main-content">
    <h1>PHP Superglobals</h1>
    <p>Superglobals are built-in variables in PHP that are available in all scopes throughout a script. No need to declare them.</p>

    <h2>List of Superglobals</h2>
    <ul>
      <li><strong>$_GET</strong> – Get data from URL parameters.</li>
      <li><strong>$_POST</strong> – Get data sent through an HTML form (POST method).</li>
      <li><strong>$_REQUEST</strong> – Collect data from both $_GET and $_POST.</li>
      <li><strong>$_SESSION</strong> – Store data per user session across pages.</li>
      <li><strong>$_COOKIE</strong> – Store data on the user’s computer.</li>
      <li><strong>$_FILES</strong> – Handle file uploads.</li>
      <li><strong>$_SERVER</strong> – Info about headers, paths, and script locations.</li>
      <li><strong>$GLOBALS</strong> – Access global variables from any scope.</li>
    </ul>

    <!-- $_GET Example -->
    <h2>Example: $_GET</h2>
    <p>Add <code>?name=John</code> to the URL and refresh.</p>
    <div class="code-container">
      <code>
        <?php
        if (isset($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);
            echo "Hello from \$_GET, " . $name . "!";
        } else {
            echo "Use ?name=YourName in URL.";
        }
        ?>
      </code>
    </div>

    <!-- $_POST Example -->
    <h2>Example: $_POST</h2>
    <form method="post" action="">
      <label for="name">Enter your name:</label>
      <input type="text" id="name" name="name" required />
      <input type="submit" value="Submit" />
    </form>

    <div class="code-container">
      <code>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            echo "Hello from \$_POST, " . $name . "!";
        }
        ?>
      </code>
    </div>

    <!-- $GLOBALS Example -->
    <h2>Example: $GLOBALS</h2>
    <div class="code-container">
      <code>
        <?php
        $site = "My Website";
        function showSite() {
            echo "Accessed from \$GLOBALS: " . $GLOBALS['site'];
        }
        showSite();
        ?>
      </code>
    </div>

    <!-- $_SERVER Example -->
    <h2>Example: $_SERVER</h2>
    <div class="code-container">
      <code>
        <?php
        echo "This script is running on: " . $_SERVER['SERVER_NAME'];
        ?>
      </code>
    </div>

    <!-- $_COOKIE Example -->
    <h2>Example: $_COOKIE</h2>
    <div class="code-container">
      <code>
        <?php
        setcookie("user", "Jane", time() + 3600); // Set cookie for 1 hour
        if (isset($_COOKIE['user'])) {
            echo "Hello from cookie, " . $_COOKIE['user'];
        }
        ?>
      </code>
    </div>

    <!-- $_SESSION Example -->
    <h2>Example: $_SESSION</h2>
    <div class="code-container">
      <code>
        <?php
        session_start();
        $_SESSION['username'] = "Jane";
        echo "Session username is: " . $_SESSION['username'];
        ?>
      </code>
    </div>

    <!-- $_FILES Example -->
    <h2>Example: $_FILES</h2>
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="uploadFile" />
      <input type="submit" value="Upload" />
    </form>
    <div class="code-container">
      <code>
        <?php
        if (isset($_FILES['uploadFile'])) {
            echo "File name: " . $_FILES['uploadFile']['name'];
        }
        ?>
      </code>
    </div>

    <!-- $_REQUEST Example -->
    <h2>Example: $_REQUEST</h2>
    <div class="code-container">
      <code>
        <?php
        if (isset($_REQUEST['name'])) {
            echo "Hello from \$_REQUEST, " . htmlspecialchars($_REQUEST['name']);
        }
        ?>
      </code>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>
