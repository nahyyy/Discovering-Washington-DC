<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Culture';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <div class="generals-intro">
            <h2>Culture</h2>
            <p>Washington, D.C. has a deeply diverse and dynamic culture shaped by people from all over the world. As the capital city, it's a place where history, politics, and multiculturalism meet. Each neighborhood has it's own big influences like Adam Morgan and 14st with it's Latin American heritage, U Street for it's jazz and African American heritage, and Georgetown for it's historic charm. The city’s art, music, and public events highlight it's inclusive spirit, with murals, museums, and performances celebrating voices from many communities. D.C. isn't just home for the American politics but also a crossroad for many cultures to combine. </p>
        </div>


        <div class="generals-grid">
            <a href="cuisine.php" class="general-card">
                <div class="general-image"><img src="assets/images/cuisine.jpeg"alt="c1" class="carousel-image"></div>
                <div class="general-content">
                    <h3>Cuisine</h3>
                    <p>D.C. cuisine mirrors its diversity, offering everything from Salvadoran pupusas to American classics and seafood from nearby Maryland!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>

            <a href="festivals.php" class="general-card">
                <div class="general-image"><img src="assets/images/festivals.jpg"alt="f1" class="carousel-image"></div>
                <div class="general-content">
                    <h3>Festivals</h3>
                    <p>Washington, D.C. hosts many vibrant festivals such as the National Cherry Blossom Festival, DC Jazz Festival, and H Street Festival. It also celebrates it's strong Latin American community throught events like Fiesta DC and the Festival Salvadoreño, where visitors can enjoy music, dance, and traditional foods from Central America!</p>
                    <span class="general-link">Learn More</span>
                </div>
            </a>


        </div>
    </main>

    <script src="assets/js/script.js"></script>
    
<?php
    include 'assets/inc/footer.inc.php';
?>