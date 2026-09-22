<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'National-Mall';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
        <a href="attractions.php" class="back-link">Go Back to All Attractions</a>

        <div class="general-header">
            <h1>National Mall</h1>

        </div>

        <div class="general-details">
            <h2>About The National Mall</h2>
            <p>The National Mall is a large, open park in the heart of Washington, D.C.. Goes from the U.S. Capitol to the Lincoln Memorial. It's home to monuments, memorials, museums, and hosts national events and celebrations!</p>


            <h2>What's around/in the National Mall</h2>
            <ul class="activities-list">
                <li>Washington Monument</li>
                <li>Lincoln Memorial</li>
                <li>U.S. Capitol</li>
                <li>Vietnam Veterans Memorial</li>
                <li>Many Smithsonian Museums</li>
            </ul>

            <h2>Quick/Important Information</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h3>Best Time to Visit</h3>
                    <p>Spring for the cherry blossoms or in the fall for smaller crowds.</p>
                </div>
                <div class="info-box">
                    <h3>How to get There</h3>
                    <p>Take the Metro to Smithsonian, Federal Triangle, or L’Efant Plaza stations. Walking and biking are also popular alternatives.</p>
                </div>
            </div>

            <h2>Local Dining</h2>
            <p>There's food trucks everywhere you turn, and there's cafes. For a more sit down feel, restaurants in Penn Quarter and Georgetown, ranging from American classic's to international dishes.</p>

        </div>
    </main>

    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>