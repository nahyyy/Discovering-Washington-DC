<?php
    // This file can be used to accept review submissions. This file should accept in data from the
    // review form and save it to a table in your database. You can use any table and field names
    // that you like for this - just make sure that it saves and can be re-queried.

    // Bonus (+2): Automatically redirect the user back to the homepage if submission is successful
    // Bonus (+3): Submit directly to the homepage, without using this file; but you must only process
    //             the submission when the user submits the form if you choose that approach.

    // Hints:
    // Get the submitted data, checking to see whether they are set or not.
    // If not, display an error message and execute either exit() or die()

    //  Connect to the database
    //  - you can either include an existing dbconf.php or connection.db.php file, or just
    //    add the connect credentials directly in this file. Up to you.


    // NOTE: If you use this, make sure you update this path or your connection will not work
    // require_once('/home/MAIN/<username>/connection.db.php');

    // Sanitize function
    require_once('inc/tools.inc.php');


$username = "aer2469";
$password = "Sans4^felony";
$hostname = "localhost";
$databaseName = 'aer2469';

//                   hostname                        username             password             db name
$mysqli = new mysqli($hostname, $username, $password, $databaseName);

if($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// variables
$successMessage = '';
$errorMessage = '';

// for submission
if (!empty($_POST)) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $review = trim($_POST['review']);
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;

    //validation
    $errors = [];

    if(empty($name)) {
        $errors[] = "name is required."; 
    } elseif(strlen($name) >= 100) {
        $errors[] = "Name must be around 100 characters";
    }

    if(empty($email)) {
        $errors[] = "Email is required.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if(empty($review)) {
        $errors[] = "Review is required";
    } elseif(strlen($review) < 10) {
        $errors[] = "Review must be at least 10 characters long.";
    } elseif(strlen($review) > 1000) {
        $errors[] = "Review must be 1000 characters or less.";
    }

    if ($rating < 1 || $rating > 5) {
        $errors[] = "Please select a rating between 1 and 5.";
    }

    //no errors so it goes into database
    if(empty($errors)) {
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $review = htmlspecialchars($review, ENT_QUOTES, 'UTF-8');

        //prepare the statement
        $stmt = $mysqli->prepare("INSERT INTO `reviews`(`name`, `email`, `review`, `rating`, `date`) VALUES(?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssi", $name, $email, $review, $rating);

        //execution
        if($stmt->execute()) {
            $successMessage = "Thank you for your review! It has been submitted successfully.";
        } else {
            $errorMessage = "Uh Oh! There was an error. Please try again!";
        }
        $stmt->close();
    } else {
        $errorMessage = implode("<br>", $errors);
    }
}

$result = $mysqli->query("SELECT `name`, `email`, `review`, `rating`, `date` FROM reviews ORDER BY date DESC");
?>
