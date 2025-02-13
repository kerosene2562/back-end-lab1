<?php
    $directory = 'exs';
    $files = scandir($directory);
    foreach ($files as $file) {
        if (is_file("$directory/$file")) {
            echo "<a href='$directory/$file'><button>$file</button></a> ";
        }
    }