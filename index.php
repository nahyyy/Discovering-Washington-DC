<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Index';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <article class="hero-section">
            <h2>Welcome to Washington, D.C.</h2>
            <p>Welcome to Washington, D.C., the heart of the United States! A vibrant city that is full of history, culture, and iconic landmarks that tell the story of the U.S. Whether you explore the museums, the monuments, the national mall and other places around the city!</p>

            <!-- images -->
            <div class="carousel">
                <!-- site images -->
                <div class="carousel-images" id="carouselImages">
                    <img src="assets/images/national-mall.jpg" alt="dc1" class="carousel-image">
                    <img src="assets/images/lincoln-memorial.jpg" alt="dc2" class="carousel-image">
                    <img src="assets/images/monument.jpg" alt="dc3" class="carousel-image">
                    <img src="assets/images/cherry-blossoms.jpeg" alt="dc4" class="carousel-image">
                    <img src="assets/images/smithsonian.jpg" alt="dc5" class="carousel-image">
                    <img src="assets/images/beach.jpg" alt="dc6" class="carousel-image">
                </div>
                <!-- dots -->
                <div class="carousel-dots" id="carouselDots"></div>
             </div>
        </article>

        <article class="content-section">
            <h2>Why Visit D.C.</h2>
            <p>D.C. is more than just the nations capital, it's a city that blends politics, art, history and diverse communities. See famous monuments up close, enjoy the city’s energy filled with festivals, live music, and more.</p>
            <p></p>
        </article>

        <section class="highlights">
            <h2>Explore by Category</h2>
            <div class="highlights-grid">
                <div class="highlight-card">
                    <h3>Top Attractions</h3>
                    <p>Some must see spots include the monuments, Smithsonian museums, the National Mall, and extra tourist areas around D.C.!</p>
                    <a href="attractions.php" class="btn">Explore</a>
                </div>
                <div class="highlight-card">
                    <h3>Culture & Food</h3>
                    <p>D.C. is rich with a blend of culture. You can enjoy international cuisines or try local favs with half-smokes and mumbo sauce. Lively scenes from “go-go” to jazz to indie and hip hop!</p>
                    <a href="culture.php" class="btn">Discover</a>
                </div>
                <div class="highlight-card">
                    <h3>Travel Planning</h3>
                    <p>Getting around D.C. is easy. The train system; Metro, the buses or just simply walking. Many attractions are near each other!</p>
                    <a href="tips.php" class="btn">Plan</a>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/script.js"></script>

<?php
    include 'assets/inc/footer.inc.php';
?>
