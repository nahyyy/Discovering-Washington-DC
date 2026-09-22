<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Attractions';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>
    <main>
        <div class="generals-intro">
            <h2>Top Attractions in D.C.</h2>
            <p>D.C. is more than just the nations capital, its a city that blends politics, art, history and diverse communities. See famous monuments up close, enjoy the city’s energy filled with festivals, live music, and more.</p>
        </div>

        <div class="generals-grid">
            <a href="monuments.php" class="general-card">
                <div class="general-image"><img src="assets/images/monument2.jpeg" alt="dc7" class="carousel-image"></div>
                <div class="general-content">
                    <h3>Monuments</h3>
                    <p>Visit famous sites like the Lincoln Memorial, Washington Monument, and the U.S. Capitol!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>

            <a href="museums.php" class="general-card">
                <div class="general-image"><img src="assets/images/museums.jpg" alt="dc8" class="carousel-image"></div>
                <div class="general-content">
                    <h3>Museums</h3>
                    <p>Explore free Smithsonian Museums such as the Air and Space Museum and Natural History Museum, filled with exhibits for all ages!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>

            <a href="national-mall.php" class="general-card">
                <div class="general-image"><img src="assets/images/national-mall.jpg" alt="dc9" class="carousel-image"></div>
                <div class="general-content">
                    <h3>National Mall</h3>
                    <p>The heart of D.C. surrounded by monuments, museums, and open green space perfect for walking and sightseeing!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>

            <a href="tourist.php" class="general-card">
                <div class="general-image"><img src="assets/images/tourist.jpg" alt="dc10" class="carousel-image"></div>
                <div class="general-content">
                    <h3>Extra Tourist Places Near D.C.</h3>
                    <p>There's more to explore around D.C., like the Baltimore National Aquarium, National Harbor, Stadiums, Ocean City, and Virginia Beach!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>


        </div>
    </main>

    <script src="assets/js/script.js"></script>

<?php
    include 'assets/inc/footer.inc.php';
?>