<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Tourist';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="attractions.php" class="back-link">Go Back to All Attractions</a>

        <div class="general-header">
            <h1>More Places to Explore!</h1>
            <p>Beyond the National Mall, D.C. offers livey neighborhoods like Georgetown, Dupont Circle, and Adams Morgan, each filled with shops, restaurants, and local charm.</p>
        </div>

        <div class="t-details">
            <h2>Exploring places in the DMV</h2>
            <p>The DMV area (D.C., Maryland, and Virginia) has countless attractions. From historic towns and museums to beaches and parks all within a few hours drive.</p>

            <h2>Geography</h2>
            <p>Washington, D.C. sits along the Potomac River, bordered by Maryland and Virginia. It's Central location makes it easy to travel to nearby states and coastal destinations.</p>
            <!-- add a pic of the dmv map here  -->
            <div class="general-image">
                <img src="assets/images/dc-map.webp" alt="b1">
            </div>


            <h2>Baltimore National Aquarium</h2>
            <p>Located in Baltimore's Inner Harbor, this famous aquarium features sharks, dolphins, jellyfish, and coral reef exhibits. Fun for all ages!</p>
            <!-- add the pic i have of the aquarium here -->
            <div class="general-image">
                <img src="assets/images/baltimore.jpeg" alt="b2">
            </div>


            <h2>National Harbor</h2>
            <p>A waterfront area just outside D.C. with shopping, restaurants, a ferris wheel, live entertainment, and occasionally a movie playing outside!</p>
            <!-- add the pic i have of the national harbor here -->
            <div class="general-image">
                <img src="assets/images/harbor.jpeg" alt="b3">
            </div>


            <h2>Stadiums</h2>
            <p>Catch a game at the Nationals Park, Audi Field, or FedEx Field. All are accessible by metro or car.</p>
            <!-- add the pic i have of the stadiums here -->
            <div class="general-image">
                <img src="assets/images/stadium.jpeg" alt="b4">
            </div>

            <h2>Ocean City</h2>
            <p>A lively Maryland Beach town known for its boardwalk, amusement rides, and seafood. About a 2.5-3 hour drive from D.C.!</p>
            <!-- add the pic i have of the boardwalk here -->
            <div class="general-image">
                <img src="assets/images/oc.jpeg" alt="b5">
            </div>

            <h2>Virginia Beach</h2>
            <p>A popular coastal getaway with sandy beaches, a scenic boardwalk, and great restaurants. About a 3.5-4 hour drive from D.C.!</p>
            <!-- add the pic i have of the beach here -->
            <div class="general-image">
                <img src="assets/images/va.jpeg" alt="b6">
            </div>
            
        </div>
    </main>

    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>