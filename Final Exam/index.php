<?php
    // 1. Connect to the database (it is ok to reference an existing connection.db.php file here)
    //  - you can either include an existing dbconf.php or connection.db.php file, or just add the
    //    connect credentials directly in this file. Up to you.
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
    

    // NOTE: Make sure you update this path or your connection will not work
    // require_once('/home/MAIN/<username>/connection.db.php');

    // Sanitize function, for your use. No PHP validations file is required.
    require_once('inc/tools.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Rochester</title>

        <!-- CSS for the pages -->
        <link href="styles/styles.css" rel="stylesheet">
        <link href="styles/forms.css" rel="stylesheet">

        <!-- Include the JavaScript file, and defer it's execution until the page loads. -->
        <script src="js/script.js" defer></script>
    </head>
    <body>
        <!-- The Header. No changes should be necessary here. -->
        <header>
            <h1>Rochester</h1>
            <img src="images/rochester.jpg" alt="Rochester">
        </header>

        <main>
            <!-- This is the textual content on the page. Nothing needs to be done with this. -->
            <section>
                <p>Rochester, New York, located on the southern shore of Lake Ontario, is a city rich in history, innovation, and cultural diversity. As the third-largest city in the state, behind New York City and Buffalo, Rochester is often celebrated for its blend of urban amenities and natural beauty. The city emerged in the early 19th century as a booming flour mill center, earning the nickname “Flour City.” Later, as the nursery industry expanded, it became known as the “Flower City,” a nod to its evolving economic and cultural identity. Rochester played a significant role in America's industrial history, especially as the home of major companies like Eastman Kodak, Xerox, and Bausch + Lomb, which helped shape its legacy as a hub of technology and photography. This industrial foundation fostered a culture of invention and progress that continues to influence the city today.</p>
                <p>Rochester's vibrant arts, education, and cultural scenes are major draws for residents and visitors alike. The city is home to several renowned institutions of higher learning, including the University of Rochester and Rochester Institute of Technology (RIT), both of which contribute significantly to research, innovation, and the local economy. The Eastman School of Music, a part of the University of Rochester, is internationally recognized for its excellence and adds to the city's rich musical landscape. Art lovers can explore the Memorial Art Gallery, while theater enthusiasts enjoy performances at Geva Theatre Center. In addition to these venues, Rochester boasts an array of festivals and events throughout the year, such as the Lilac Festival in Highland Park, which celebrates the city's horticultural heritage each spring. These cultural assets, along with a diverse dining scene and a strong sense of community, contribute to a high quality of life that rivals larger metropolitan areas.</p>
                <p>Nature and recreation are also integral to life in Rochester. The Genesee River runs through the city, offering scenic views and outdoor activities such as hiking, biking, and kayaking. The city's park system, designed in part by Frederick Law Olmsted, the famed landscape architect of New York City's Central Park, includes gems like Genesee Valley Park and Highland Park. These green spaces provide year-round opportunities for recreation, from summer picnics to winter cross-country skiing. Proximity to the Finger Lakes region also means that world-class wineries, hiking trails, and waterfalls are just a short drive away. Furthermore, Rochester's revitalization efforts, particularly in the downtown area and along the Genesee Riverway Trail, have brought renewed energy and investment to the city. With a mix of historical charm, technological innovation, and a deep-rooted commitment to the arts and environment, Rochester offers a unique and engaging urban experience for those who call it home or choose to visit.</p>
            </section>

            <!--
                The Carousel.

                The aside element below should be updated so that the images are rotated through.
                Find carousel-2.jpg and carousel-3.jpg in the images folder. The rotation should
                start over again from 1, once the end is reached.

                All JavaScript for this should be placed into the js/script.js file.
            -->
            <aside>
                <img src="images/carousel-1.jpg" alt="A music event in Rochester, NY" id="carousel-image">
                <img src="images/carousel-2.jpg" alt="water view" id="carousel-image">
                <img src="images/carousel-3.jpg" alt="skatepark" id="carousel-image">
                
                <div class="carousel-controls">
                    <button class="control previous-button">
                        <img src="images/previous.png" alt="previous image">
                    </button>
                    <button class="control next-button">
                        <img src="images/next.png" alt="next image">
                    </button>
                </div>
            </aside>

            <hr>

            <!--
                The Sign Up Form.

                The form itself will need all inputs and controls added here.
                Make sure that it posts it's data to the destination page correctly.
                Create two input fields for name and email.

                Be sure to validate the form submission with JavaScript first, and stop the page from submitting if it fails.
                An error message should be placed above the input fields.
            -->
            <section id="signup" class="centered-forms">
                <h2>Sign Up for our Events Newsletter</h2>
                <p>Stay informed about what's going on in ROC!</p>

                <form id="signup" method="POST" action="review.php" novalidate>
                    <div class="centered-forms">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" maxlength="100">
                        <span id="nameError" style="color: #dc2626; font-size: 0.875rem;"></span>
                    </div>

                    <div class="centered-forms">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name= "email" maxlength="100">
                        <span id="emailError" style="color: #dc2626; font-size: 0.875rem;"></span>
                    </div>

                    <button type="submit" class="submit-btn">Sign Up!</button>
                </form>
            </section>

            <hr>

            <!--
                The Review Form.

                The form itself will need all inputs and controls added here.
                Make sure that it posts it's data to the destination page correctly.
                Create two input fields for name and email, radio buttons for the rating, and a text area for the review text.

                Bonus (+2): Automatically redirect the user back to the homepage if submission is successful.
                Bonus (+3): Submit directly to the homepage, without using the extra file; but you must only process
                            the submission when the user submits the form if you choose that approach.

                Be sure to validate the form submission with JavaScript first, and stop the page from submitting if it fails.
                An error message should be placed above the input fields.
            -->
            <section id="review-form" class="centered-forms">
                <h2>Reviews</h2>
                <p>Leave a review of what you think about Rochester.</p>
                <form>
                <form id="review-form" method="POST" action="review.php" novalidate>
                    <div class="centered-forms">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" maxlength="100">
                        <span id="nameError" style="color: #dc2626; font-size: 0.875rem;"></span>
                    </div>

                    <div class="centered-forms">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name= "email" maxlength="100">
                        <span id="emailError" style="color: #dc2626; font-size: 0.875rem;"></span>
                    </div>

                    <div class="centered-forms">
                        <label>Rating *</label>
                        <div class="centered-forms">
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

                    <?php if($successMessage): ?>
                        <div class="success"><?php echo $successMessage; ?></div>
                    <?php endif; ?>
                    <?php if($errorMessage): ?>
                        <div class="error"><?php echo $errorMessage; ?></div>
                    <?php endif; ?>

                    <div id="clientError" class="error-message" style="display: none;"></div>

                        <label for="review">Review *</label>
                        <textarea id="review" name="review" maxlength="1000"></textarea>
                        <div class="char-count">
                            <span id="charCount">0</span> /1000 characters
                        </div>
                        <span id="reviewError" style="color: #dc2626; font-size: 0.875rem;"></span>
                    </div>

                    <button type="submit" class="submit-btn">Leave a review!</button>
                </form>
            </section>

            <!--
                The Reviews.

                All of the submitted reviews should display below, with at least the three following pieces of information:
                    * Name
                    * Rating
                    * Review Text
            -->
            <section id="reviews">
                <div class="centered-forms">
                    <h2>
                        Visitors Comments
                    </h2>

                <?php if($result && $result->num_rows > 0): ?>
                    <?php
                    //loop
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="centered-forms">
                        <div id="reviews">
                            <span class="centered-forms"><?php echo $row['name']; ?></span>
                            <span class="centered-forms">
                                <?php echo str_repeat('⭐️', $row['rating']); ?>
                            </span>
                        </div>
                        <p class="centered-forms"><?php echo nl2br($row['review']); ?></p>
                        <p class="centered-forms">
                            Posted on <?php echo date ('F j, Y', strtotime($row['date'])); ?>
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                <?php else: ?>
                    <div id="reviews">
                        <p>No reviews yet. Be the first!</p>
                    </div>
                <?php endif; ?>

            </section>
        </main>

        <!--
            The Footer.

            Update "Student Name" to your own name.
        -->
        <footer>
        <!-- Footer -->
            <p>&copy; 2025 Anahy Ramirez</p>
            <p>Rochester Institute of Technology</p>
            <p>School of Information</p>

            <!-- Outputs the Latest Modified File -->
            <!-- Do not remove -->
            <?php
                $dir = getcwd();
                require_once('inc/modified.inc.php');
            ?>
        </footer>
    </body>
</html>