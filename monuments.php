<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Monuments';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>
    <main>
        <a href="attractions.php" class="back-link">Go Back to All Attractions</a>

        <div class="general-header">
            <h1>Monuments</h1>
            <p></p>
        </div>

        <div class="general-details">
            <h2>History on the Monuments</h2>
            <p>Washington, D.C. monuments honor key figures and moments in American history, from presidents to events like World War 2 and the Civil Rights Movement.</p>

            <h2>Monuments/Memorials in the Area</h2>
            <ul class="activities-list">
                <li>Lincoln Memorial</li>
                <li>Washington Monument</li>
                <li>Jefferson Memorial</li>
                <li>World War 2 Memorial</li>
                <li>Martin Luther King Jr. Memorial</li>
            </ul>

            <h2>Quick/Important Information</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h3>How to get there</h3>
                    <p>Most monuments are very close to one another at the National Mall, making them easy to visit by walking. You can take the Metro to the Smithsonian or Federal Triangle stations, then follow the sign or maps to each memorial.</p>
                </div>
                <div class="info-box">
                    <h3>How to Get Around</h3>
                    <p>Walking is the best way. Theres also options to rent and ride a bike or scooter, using the DC Circulator bus or joining a guided tour.</p>
                </div>
            </div>
    </main>

    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>
