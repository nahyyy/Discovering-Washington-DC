<?php
    /**
     *  ########################################          WARNING          ########################################
     *
     *
     *                                      DO NOT MODIFY ANYTHING IN THIS FILE.
     *
     *
     *                      THIS IS FOR GRADING PURPOSES ONLY AND ANY MODIFICATIONS WILL RESULT IN
     *                                AN IMMEDIATE ZERO ON THIS FINAL PRACTICAL EXAM!!
     *
     *
     *                                      DO NOT MODIFY ANYTHING IN THIS FILE.
     *
     *
     *  ########################################          WARNING          ########################################
     */

    // Set the current timezone to America/New York (Eastern Time)
    date_default_timezone_set('America/New_York');

    // Professor sets this time to the deadline for the exam.
    // Currently set to 05-01-2025 - 10:30am ET
    //                  H   M   S  MM  D  YYYY
    $deadline = (mktime(11, 15, 00, 12, 11, 2025) * 1000);

    // This clears cached values for last modified and similar
    clearstatcache();

    function getFiles($dir) {
        // Get an array of files and folders for the requested directory
        $files = scandir($dir);

        // Ignore current and parent directory references
        unset($files[array_search('.', $files, true)]);
        unset($files[array_search('..', $files, true)]);

        // If it's empty, return early; required or it will recurse indefinitely
        if (count($files) <= 0) {
            return;
        }

        echo '<ol>';

        // Iterate over each file in the current folder. If it's a folder, get the files in that as well.
        // Compare the last modified timestamp against the deadline and set the class to 'modified' if it fails.
        foreach ($files as $file) {
            $lastModifiedMilliseconds = round(filemtime($dir . '/' . $file) * 1000);
            $class = ($lastModifiedMilliseconds > $GLOBALS['deadline']) ? 'modified' : 'unmodified';
            $lastModified = date("F d Y H:i:s", filemtime($dir . '/' . $file));
            echo '<li class="' . $class . '">' . $lastModified . ' - ' . $file;

            if (is_dir($dir . '/' . $file)) {
                getFiles($dir . '/' . $file);
            }

            echo '</li>';
        }

        echo '</ol>';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grading - Last Modified Times</title>

        <style>
            .modified {
                color: red;
            }
            .unmodified {
                color: green;
            }
            .bold {
                font-weight: 700;
            }
        </style>
    </head>
    <body>
        <main>
            <h2>Files in Submission - Last Modified On:</h2>
            <?php
                // The deadline
                echo '<p><span class="bold">Deadline:</span> ' . date("F d Y H:i:s", ($deadline / 1000)) . '</p>';

                // Get all files and last modified times, recursively, in this directory
                getFiles(getcwd());
            ?>
        </main>
    </body>
</html>