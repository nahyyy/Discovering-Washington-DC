<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Stay';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="index.php" class="back-link">Go Back to Home</a>

        <div class="general-header">
            <h1>Where to Stay</h1>
        </div>

        <div class="general-details">
            <h2>Accomodation Types</h2>
            <p>Based on the budget you've set for your trip, here's a few places varying by price!</p>

<!-- make its own css since its different layout from the rest -->
            <div class="accommadation-types">
                <div class="accommodation-card">
                    <h3>Budget Friendly</h3>
                    <div class="price-range">Under $150 per night</div>
                    <ul class="accommodation-features">
                        <li>Hotel Hive</li>
                        <li>Holiday Inn Washington Capitol</li>
                    </ul>
                </div>

                <div class="accommodation-card">
                    <h3>Mid-Range Hotels</h3>
                    <div class="price-range">$150-300 per night</div>
                    <ul class="accommodation-features">
                        <li>Washington Plaza Hotel</li>
                        <li>Hyatt Place Washington, D.C./Georgetown/West End</li>
                    </ul>
                </div>

                <div class="accommodation-card">
                    <h3>Luxury Hotels</h3>
                    <div class="price-range">$300+ per night</div>
                    <ul class="accommodation-features">
                        <li>Waldorf Astoria Washington DC</li>
                        <li>The Hay-Adams</li>
                    </ul>
                </div>

            <!-- back to the og style -->
            <h2>Booking Tips</h2>
            <ul class="activities-list">
                <li><strong>Book in Advance: </strong>Secure the best rates and availability by reserving early!</li>
                <li><strong>Compare Prices: </strong>Use platforms and apps to compare prices and read reviews.</li>
                <li><strong>Flexible Dates: </strong>If possible, adjust travel dates to find lower rates since hotel prices can vary.</li>
                <li><strong>Direct Booking: </strong>Sometimes booking directly with the hotel can offer perks and it's also a secure form to reserve.</li>
            </ul>

            <h2>Specific Considerations</h2>
            <p><strong>Location:</strong> Choose accommodations based on proximity to the attractions you plan to visit. Downtown and Dupont Cirlce are central, while Georgetown is more of a historic vibe.</p>
            <p><strong>Transportation:</strong> If you're going to rely mostly on public transport, make sure there's a nearby Metro or bus stop.</p>

        </div>
    </main>

    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>