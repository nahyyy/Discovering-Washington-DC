<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Cuisine';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>
    <main>
        <a href="culture.php" class="back-link">Go Back to Culture</a>

        <div class="general-header">
            <h1>Local Cuisine</h1>
        </div>

        <div class="general-details">
            <h2>About D.C. Cuisine</h2>
            <p>D.C. cuisine reflects its international influece and rich cultural mix. The city offers everything from high-end dining to global street food, representing flavors from Latin America, Africa, Asia, and beyond. Its food scene blends tradition and creativity, making it one of the most diverse in the US. </p>

            <h2>Popular Dishes in D.C.</h2>
            <div class="info-grid">
                <div class="info-box">
                    <h3>Half-Smoke</h3>
                    <p>Spicy smoked sausages served with chili and onions.</p>
                </div>
                <div class="info-box">
                    <h3>Mumbo Sauce Wings</h3>
                    <p>Crispy wings covered in a sweet and tangy red sauce found only in D.C.!</p>
                </div>
                <div class="info-box">
                    <h3>Maryland Crab Cakes</h3>
                    <p>Golden crab patties made with fresh Chesapeake Bay crab meat.</p>
                </div>
                <div class="info-box">
                    <h3>Pupusas</h3>
                    <p>Salvadoran corn tortillas filled with different fillings!</p>
                </div>
            </div>

            <h2>Pupusas, The Holy Grail of El Salvador and D.C.</h2>
            <p>Pupusas are thick, handmade corn tortillas stuffed with flavorful fillings and cooked on a griddle until golden and crispy on the outside. Usually served with curtido (a pickled cabbage slaw) and tomato salsa. Originating from El Salvador, they've become a beloved dish in D.C., since D.C. is home to a grand population of Salvadorans. </p>
            <h3>Variations:</h3>
            <div class="ingredient-list">
                <h4>Popular Fillings:</h4>
                <ul>
                    <li><strong>Queso (Cheese):</strong> Melted soft cheese, quesillo or mozzarella.</li>
                    <li><strong>Revueltas:</strong> A mix of cheese, beans, and chicharron (seasoned pork), one of the most traditional combos.</li>
                    <li><strong>Frijoles (Beans):</strong> Smooth refried breans for a hearty and vegetarian-friendly option.</li>
                    <li><strong>Loroco:</strong> A Central American flower bud mixed with cheese. </li>
                </ul>
            </div>

            <h2>Half-Smoke</h2>
            <p>D.C. signature sausage</p>
            <div class="ingredient-list">
                <h4>Ingredients:</h4>
                <ul>
                    <li>Coarsely ground pork and beef sausage</li>
                    <li>Smoked for flavor</li>
                    <li>Served on a warm bun</li>
                    <li>Topped with chili, onions, and mustard</li>
                </ul>
            </div>

            <h2>Street Food and Snacks</h2>
            <p>Food trucks are a big part of D.C. life, serving tacos, kebabs, empanadas, and ice cream around the National Mall and downtown D.C..</p>

            <h2>Desserts and Sweets</h2>
            <p>Local favs like Georgetown Cupcakes, District Doughnut, Dolcezza Gelato, Un je ne sais Quoi.</p>

            <h2>Recommended places to Eat</h2>
            <p>These are some spots that I personally like to eat at in D.C.!</p>
            <ul class="activities-list">
                <li>Ben's Chili Bowl</li>
                <li>El Rinconcito Cafe</li>
                <li>Old Ebbit Grill</li>
                <li>Union Market</li>
                <li>El Comalito</li>
            </ul>
        </div>
    </main>

    <script src="assets/js/script.js"></script>

<?php
    include 'assets/inc/footer.inc.php';
?>
