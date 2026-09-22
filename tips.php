<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Tips';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="index.php" class="back-link">Go Back to Home</a>

        <div class="general-header">
            <h1>Travel Tips</h1>
            <p>D.C. is easy to explore and very visitor friendly. Most major attractions are nearby to each other and public transportation makes getting around simple. </p>
        </div>

        <div class="general-details">
            <h2>Getting Around</h2>
            <p>D.C. has one of the best transit systems in the U.S. and most attractions are accessible by Metro, bus, or even on foot. Parking is very limited and hard to find most of the time, so using public transportation or rideshares is often the best choice.</p>
            <ul class="activities-list">
                <li>Metro</li>
                <li>DC Circulator Bus</li>
                <li>Capital Bikeshare</li>
                <li>Electric Scooters</li>
                <li>Walking</li>
                <li>Rideshare/Taxis</li>
            </ul>

            <h2>Safety</h2>
            <p>D.C. is generally safe for tourist, especially around major attractions, but always stay alert and use common sense.</p>
            <ul class="activities-list">
                <li>Avoid poorly lit or empty areas at night.</li>
                <li>Keep belongings close in crowded places.</li>
                <li>Use official taxis or rideshare apps.</li>
                <li>Follow traffic rules when biking and walking (They will run you over, I’ve seen it happen!)</li>
                <li>Stay hydrated and wear sunscreen, especially in the summer.</li>
            </ul>

            <h2>What to Pack</h2>
            <ul class="activities-list">
                <li>Comfortable walking shoes</li>
                <li>Refillable water bottle</li>
                <li>Portable phone charger</li>
                <li>Sunscreen</li>
                <li>Light clothing in summer</li>
            </ul>

            <h2>Quick/Important Information</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h3>Download Metro and Maps</h3>
                    <p>Getting around will be a lot easier having the app since the train map is on it and it's the most accurate. </p>
                </div>
                <div class="info-box">
                    <h3>Money and Budgeting</h3>
                    <p>Most places accept cards, but it's good to carry cash for food trucks and small shops. D.C. can be pricey, so plan ahead for meals, transportation, and souvenirs ahead of time.</p>
                </div>
            </div>
            
        </div>
    </main>


    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>