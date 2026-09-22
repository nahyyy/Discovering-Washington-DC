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

    $latestModified = null;

    // Set the current timezone to America/New York (Eastern Time)
    date_default_timezone_set('America/New_York');

    // This clears cached values for last modified and similar
    clearstatcache();

    getLatestModified($dir);

    function getLatestModified($dir) {
        // Get an array of files and folders for the requested directory
        $files = scandir($dir);

        // Ignore current and parent directory references
        unset($files[array_search('.', $files, true)]);
        unset($files[array_search('..', $files, true)]);

        // If it's empty, return early; required or it will recurse indefinitely
        if (count($files) <= 0) {
            return;
        }

        // Iterate over each file in the current folder. If it's a folder, get the files in that as well.
        // Compare the last modified timestamp against the deadline and set the class to 'modified' if it fails.
        foreach ($files as $file) {
            $lastModifiedMilliseconds = round(filemtime($dir . '/' . $file) * 1000);
            if ($GLOBALS['latestModified'] == null || $lastModifiedMilliseconds > $GLOBALS['latestModified']) {
                $GLOBALS['latestModified'] = $lastModifiedMilliseconds;
            }

            if (is_dir($dir . '/' . $file)) {
                getLatestModified($dir . '/' . $file);
            }
        }
    }
?>
<section>
    <p><span class="bold">Latest Modified File:</span> <?=date("n-j-Y H:i:s", ($latestModified / 1000));?></p>
</section>