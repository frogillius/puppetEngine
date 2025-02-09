<?php
// Get all files in the current directory
$files = array_diff(scandir(__DIR__), array('.', '..')); // Exclude '.' and '..'

// HTML to display the files
echo "<h1>File Listing</h1>";
echo "<ul>";

// Loop through each file and create a link to it
foreach ($files as $file) {
    if (is_file($file)) { // Ensure it's a file, not a directory
        echo "<li><a href=\"$file\" target=\"_blank\">$file</a></li>";
    }
}

echo "</ul>";
?>
