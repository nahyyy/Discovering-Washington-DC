<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Museums';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="attractions.php" class="back-link">Go Back to All Attractions</a>

        <div class="general-header">
            <h1>Museums</h1>
        </div>

        <div class="general-details">
            <h2>About the Museums in D.C.</h2>
            <p>Washington, D.C. is home to some of the best museums in the world, covering history, art, science, and culture. Most are free and offer interactive exhibits for all ages.</p>

            <h2>Smithsonian</h2>
            <p>The Smithsonian Institution is a group of museums and research centers, including the National Air and Space Museum, National Museum of American History, and National Museum of Natural History. All for free!</p>

            <h2>The Museums in D.C. are:</h2>
            <ul class="activities-list">
                <li>National Air and Space Museum</li>
                <li>National Museum of American History</li>
                <li>National Gallery of Art</li>
                <li>National Museum of African American History and Culture</li>
                <li>Hirshhorn Museum and Sculpture Garden</li>
            </ul>

            <h2>Quick/Important Information</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h3>Best Time to Visit</h3>
                    <p>Can visit them anytime but for smaller crowds, recommended to come during fall time.</p>
                </div>
                <div class="info-box">
                    <h3>What to bring</h3>
                    <ul class="activities-list">
                        <li>Comfortable walking shoes</li>
                        <li>Water bottle</li>
                        <li>Camera</li>
                        <li>Small backpack</li>
                    </ul>
                </div>
                <div class="info-box">
                    <h3>What not to Bring</h3>
                    <ul class="activities-list">
                        <li>Large backpacks</li>
                        <li>Food or drinks inside exhibits</li>
                    </ul>
                </div>
                <div class="info-box">
                    <h3>Guided Tours</h3>
                    <p>Many of these offer free or paid guided tours, audio tours, and interactive apps. Tours give deeper insight into the exhibits and are helpful for first time visitors.</p>
                </div>
            </div>
        </div>
    </main>


    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>