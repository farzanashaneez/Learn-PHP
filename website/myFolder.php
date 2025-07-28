<?php
$directory = '/Users/farzanashaneez/Desktop/Learn PHP/website';
$files = array_filter(
    array_diff(scandir($directory), ['.', '..']),
    fn($file) => pathinfo($file, PATHINFO_EXTENSION) === 'txt'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = trim($_POST['filename'] ?? '');

    if ($filename) {
        $filepath = "$directory/$filename";

        if (isset($_POST['add'])) {
            if (!str_ends_with($filename, '.txt')) {
                $filename .= '.txt';
                $filepath = "$directory/$filename";
            }
            file_put_contents($filepath, '');
        } elseif (isset($_POST['delete']) && file_exists($filepath)) {
            unlink($filepath);
        } elseif (isset($_POST['edit']) && isset($_POST['content'])) {
            file_put_contents($filepath, $_POST['content']);
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Manager</title>
   <link rel="stylesheet" href="/style.css">
</head>
<body>
<?php include 'navbar.php'; ?>
    <h1>File Manager</h1>

    <form method="POST">
        <input type="text" name="filename" placeholder="Enter filename (without .txt)" required>
        <button type="submit" name="add">Add .txt File</button>
    </form>

    <h2>TXT Files:</h2>
    <div class="grid-container">
        <?php foreach ($files as $file): ?>
            <div class="file-card">
                <strong><?php echo htmlspecialchars($file); ?></strong>

                <form method="POST">
                    <input type="hidden" name="filename" value="<?php echo htmlspecialchars($file); ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>

                <form method="POST">
                    <input type="hidden" name="filename" value="<?php echo htmlspecialchars($file); ?>">
                    <textarea name="content"><?php echo htmlspecialchars(file_get_contents("$directory/$file")); ?></textarea>
                    <button type="submit" name="edit">Save</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="note">
        <p>Note: Files are stored in the directory <code><?php echo htmlspecialchars($directory); ?></code>.</p>
        <div class="flex-container">
    <div class="flex-item">
        <h2>CRUD Operations</h2>
        <ul>
            <li><strong>Create:</strong> Add a new `.txt` file using the input form. ( <code>file_put_contents()</code>)</li>
            <li><strong>Read:</strong> View the contents of each `.txt` file displayed in a textarea. ( <code>file_get_contents()</code>)</li>
            <li><strong>Update:</strong> Modify the content of a `.txt` file and save it. ( <code>file_put_contents()</code> again)</li>
            <li><strong>Delete:</strong> Remove an existing `.txt` file. ( <code>unlink()</code>)</li>
        </ul>
    </div>
    <div class="flex-item">
        <h2>Usage Instructions</h2>
        <p>To <strong>add</strong> a file, enter the filename without ".txt" and click <em>Add</em>. <br>
           To <strong>edit</strong>, change the content in the textarea and click <em>Save</em>. <br>
           To <strong>delete</strong>, click the <em>Delete</em> button next to a file.</p>
    </div>
</div>


</body>
</html>
