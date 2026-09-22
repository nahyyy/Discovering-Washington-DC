<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Story';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="index.php" class="back-link">Go Back to Home</a>

        <div class="general-header">
            <h1>My Story</h1>
        </div>

        <div class="story-section">
            <div class="general-details">
                <h2>Salvadoran Roots</h2>
                <p>All of my family is from El Salvador. Both my parents are Salvadoran, They are both immigrants and immigrated to the U.S. in the early 2000’s. </p>
            </div>
            <div class="carousel">
                <div class="carousel-images" id="carouselImages1">
                    <img src="assets/images/sr1.jpeg" alt="es1" class="carousel-image">
                    <img src="assets/images/sr2.JPG" alt="es2" class="carousel-image">
                    <img src="assets/images/sr3.JPG" alt="es3" class="carousel-image">
                </div>
                <!-- dots -->
                <div class="carousel-dots" id="carouselDots1"></div>
            </div>
        </div>

        <!-- texas roots -->
        <div class="story-section">
            <div class="general-details">
                <h2>Texas Roots</h2>
                <p>I was born in Dallas, Texas on December 10th, 2003. I grew up in Texas, did all of elementary school there. Most of my family is there currently.</p>
            </div>
            <div class="carousel">
                <div class="carousel-images" id="carouselImages2">
                    <img src="assets/images/tx1.JPG" alt="tx1" class="carousel-image">
                    <img src="assets/images/tx2.jpeg" alt="tx2" class="carousel-image">
                    <img src="assets/images/tx3.jpeg" alt="tx3" class="carousel-image">
                </div>
                <!-- dots -->
                <div class="carousel-dots" id="carouselDots2"></div>
            </div>
        </div>

        <!-- dc roots -->
        <div class="story-section"> 
            <div class="general-details">
                <h2>Washington, D.C. Roots</h2>
                <p>We moved to D.C. October 13th, 2010. We moved because my dad had better job opportunities there and he wanted to build a construction company in D.C. The very large Salvadoran community was also a comforting thought.</p>
            </div>
            <div class="carousel">
                <div class="carousel-images" id="carouselImages3">
                    <img src="assets/images/dc1.jpeg" alt="dc1" class="carousel-image">
                    <img src="assets/images/dc2.jpeg" alt="dc2" class="carousel-image">
                    <img src="assets/images/dc3.JPG" alt="dc3" class="carousel-image">
                </div>
                <!-- dots -->
                <div class="carousel-dots" id="carouselDots3"></div>
            </div>
        </div> 


    </main>


    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>