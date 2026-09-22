
<?php
    $pageTitle = 'Comments';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

<?php 
///Anahy Ramirez
// Comment/Review page
//Web & Mobile 2


//database connection
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
    $comment = trim($_POST['comment']);
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0; //youtubeeeee

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

    if(empty($comment)) {
        $errors[] = "Comment is required";
    } elseif(strlen($comment) < 10) {
        $errors[] = "Comment must be at least 10 characters long.";
    } elseif(strlen($comment) > 1000) {
        $errors[] = "Comment must be 1000 characters or less.";
    }

    if ($rating < 1 || $rating > 5) {
        $errors[] = "Please select a rating between 1 and 5.";
    }

    //no errors so it goes into database
    if(empty($errors)) {
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

        //prepare the statement
        $stmt = $mysqli->prepare("INSERT INTO `dc_comments`(`name`, `email`, `comment`, `rating`, `date`) VALUES(?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssi", $name, $email, $comment, $rating);

        //execution
        if($stmt->execute()) {
            $successMessage = "Thank you for your comment! It has been submitted successfully.";
        } else {
            $errorMessage = "Uh Oh! There was an error. Please try again!";
        }
        $stmt->close();
    } else {
        $errorMessage = implode("<br>", $errors);
    }
}

$result = $mysqli->query("SELECT `name`, `email`, `comment`, `rating`, `date` FROM dc_comments ORDER BY date DESC");
?>

<main>
    <a href="index.php" class="back-link">Go Back to Home</a>

    <div class="general-header">
        <h1>Share your D.C. Experience</h1>
        <p>We'd love to hear about your visit to Washington, D.C.!</p>
    </div>

    <div class="comment-form-container">
        <h2 style="color: #1e3a8a; margin-bottom: 1.5rem;">Leave a Comment!</h2>

        <?php if($successMessage): ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>

        <?php if($errorMessage): ?>
            <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <div id="clientError" class="error-message" style="display: none;"></div>

        <form id="commentForm" method="POST" action="comments.php" novalidate>
            <div class="form-group">
                <label for="name">Your Name *</label>
                <input type="text" id="name" name="name" maxlength="100">
                <span id="nameError" style="color: #dc2626; font-size: 0.875rem;"></span>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name= "email" maxlength="100">
                <span id="emailError" style="color: #dc2626; font-size: 0.875rem;"></span>
            </div>

            <div class="form-group">
                <label>Rating *</label>
                <div class="rating-group">
                    <input type="radio" id="rating1" name="rating" value="1">
                    <label for="rating1">1 ⭐️</label>

                    <input type="radio" id="rating2" name="rating" value="2">
                    <label for="rating2">2 ⭐️</label>

                    <input type="radio" id="rating3" name="rating" value="3">
                    <label for="rating3">3 ⭐️</label>

                    <input type="radio" id="rating4" name="rating" value="4">
                    <label for="rating4">4 ⭐️</label>

                    <input type="radio" id="rating5" name="rating" value="5">
                    <label for="rating5">5 ⭐️</label>
                </div>
                <span id="ratingError" style="color: #dc2626; font-size: 0.875rem;"></span>
            </div>

            <div class="form-group">
                <label for="comment">Your Comment *</label>
                <textarea id="comment" name="comment" maxlength="1000"></textarea>
                <div class="char-count">
                    <span id="charCount">0</span> /1000 characters
                </div>
                <span id="commentError" style="color: #dc2626; font-size: 0.875rem;"></span>
            </div>

            <button type="submit" class="submit-btn">Submit Comment!</button>
        </form>
    </div>

    <div class="comments-section">
        <h2 style="color: #1e3a8a; margin-bottom: 1.5rem; text-align: center;">
            Visitors Comments
        </h2>

        <?php if($result && $result->num_rows > 0): ?>
            <?php
            //loop
            while($row = $result->fetch_assoc()) {
            ?>
                <div class="comment-card">
                    <div class="comment-header">
                        <span class="comment-author"><?php echo $row['name']; ?></span>
                        <span class="comment-rating">
                            <?php echo str_repeat('⭐️', $row['rating']); ?>
                        </span>
                    </div>
                    <p class="comment-text"><?php echo nl2br($row['comment']); ?></p>
                    <p class="comment-date">
                        Posted on <?php echo date ('F j, Y', strtotime($row['date'])); ?>
                    </p>
                </div>
            <?php
            }
            ?>
        <?php else: ?>
            <div class="no-comments">
                <p>No comments yet. Be the first to share your experience!</p>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php
$mysqli->close();   
?>

<?php
    include 'assets/inc/footer.inc.php';
?>




