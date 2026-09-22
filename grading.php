<!-- Anahy Ramirez
10/20/2025
Web & Mobile 2
Individual Project Part1 -->

<?php
    $pageTitle = 'Grading';
    $basePath = './';
    include 'assets/inc/header.inc.php';
?>

    <main>
       <a href="index.php" class="back-link">Go Back to Home</a> 

        <div class="general-header">
            <h1>Project Documentation</h1>
            <p>Grading Criteria and Project Specifications</p>
        </div>

        <div class="general-details">
            <h2>Design and Quality of Content (30 points)</h2>

            <h3>1. Good Design Techniques - CRAP (10 points)</h3>
            <p>This project applies all four CRAP principles throughout:</p>
            <ul class="activities-list">
                <li><strong>Contrast:</strong> Navy blue headers and cherry blossom pink create a strong contrast. White content areas contrast against light gray background.Text color contrasts well with backgrounds for readability.</li>
                <li><strong>Repetition:</strong> Consistent header/footer on all pages. Same navigation structure across entire site. Repeated cherry blossom theme. Uniform button styling, card layouts, and typography throughtout.</li>
                <li><strong>Alignment:</strong> Content centered with consistent max-width conatiner. All elements aligned to grid. Proper spacing and margins maintained consistently. Flexbox and grid layouts create organized structure.</li>
                <li><strong>Proximity:</strong> Related navigation items grouped in dropdown menus. Text paired with relevant images. Headings grouped with descriptions. Cards group information logically.</li>
            </ul>

            <h3>2. Organization of Information (10 points)</h3>
            <p>Content is chunked and organized</p>
            <ul class="activities-list">
                <li><strong>Information Architecture:</strong> Four main categories (Exploring D.C., Culture & Food, Travel Planning, Blog) with subcategories. Prevents overwhelming users with too many choices.</li>
                <li><strong>Chunked Content:</strong> Each page focuses on specific topic. Long content broken into sections with clear headings. Card-based layouts organize information into digestible chunks.</li>
                <li><strong>Text and Graphics:</strong> Images paired with descriptive text. Maps used to show geographic context (DMV area map on tourist.html). Carousels break up text visually. Image containers separate from body text when needed</li>
                <li><strong>Visual Hierarchy:</strong> Heading hierarchy (h1, h2, h3) properly implemented. Font sizes vary appropriately. Bold text emphasizes key points. Lists organize related information.</li>
            </ul>

            <h3>3. Content Quality (10 points)</h3>
            <ul class="activities-list">
                <li><strong>Interesting, Engaging Read:</strong> Content written to convince visitors to travel to D.C.. Descriptions provide reasons to visit D.C.. Personal narrative adds a personal connection to the site user.</li>
                <li><strong>Grammar and Spelling:</strong> All content proofread for grammar and spelling accuracy.</li>
                <li><strong>Relevant Maps:</strong> D.C. locator map shows geographic location. DMV map shows region context.</li>
                <li><strong>Quality of Content:</strong> Pages contain information. Tourism info inclused accessibility and what to expect.</li>
            </ul>
        
        </div>

        <div class="general-details">
            <h2>Minimum Requirements Met</h2>

            <h3> 1. Minimum 10 Content Pages</h3>
            <p>This project includes 13 content pages plus 2 additional pages (Work Cited and Project Documentation), exceeding the minimum requiremnets:</p>
            <ul class="activities-list">
                <li><strong>index.html</strong>- Home page with hero carousel and site overview</li>
                <li><strong>attractions.html</strong>- All Attractions overview page</li>
                <li><strong>monuments.html</strong>- Monuments and Memorials page</li>
                <li><strong>museums.html</strong>- World-Class Museums page</li>
                <li><strong>national-mall.html</strong>- National Mall specific page</li>
                <li><strong>tourist.html</strong>- Extra Tourist Areas page (Baltimore, National Harbor, Stadiums, Ocean City, Virginia Beach)</li>
                <li><strong>culture.html</strong>- D.C. Culture and Heritage page</li>
                <li><strong>cuisine.html</strong>- Local Cuisine and Food page</li>
                <li><strong>festivals.html</strong>- Events and Festivals page</li>
                <li><strong>tips.html</strong>- Travel Tips page</li>
                <li><strong>stay.html</strong>- Where to Stay accommodations page</li>
                <li><strong>story.html</strong>- My Story (personal narative with three sections)</li>
                <li><strong>contact.html</strong>- Contact Page</li>
            </ul>
            <p><strong>Plus 2 Additional Pages: </strong>citations.html (Work Cited) and grading.html (Project Documentation)</p>

        </div>

        <div class="general-details">
            <h2>Code Design Requirements (10 points)</h2>

            <h3>Code Indentation and Structure</h3>
            <ul class="activities-list">
                <li>All HTML files are properly indented.</li>
                <li>Nested elements indented appropriately.</li>
                <li>CSS rules formatted with clear spacing.</li>
                <li>Code is readable and easy to understand.</li>
            </ul>

            <h3>Global CSS File</h3>
            <ul class="activities-list">
                <li>Only one CSS sheet linked to all pages.</li>
                <li>No inline styles used.</li>
                <li>No document-based styles.</li>
                <li>Efficient CSS organization with grouped selectors and categorized.</li>
            </ul>

            <h3>Well-thought CSS selectors</h3>
            <ul class="activities-list">
                <li>Classes named semantically.</li>
                <li>CSS organized by component.</li>
                <li>Media Queries grouped for responsive design.</li>
            </ul>

            <h3>Comments in CSS and HTML</h3>
            <ul class="activities-list">
                <li>CSS file includes comments with section titles.</li>
                <li>HTML includes helpful comments.</li>
                <li>Comments explain non-obvious design decisions.</li>
            </ul>

            <h3>All code is Handwritten</h3>
            <ul class="activities-list">
                <li>All HTML and CSS written from scratch.</li>
                <li>Learned more on JS in order to make a better carousel functionality.</li>
                <li>No copied code from other projects.</li>
            </ul>
        </div>

        <div class="general-details">
            <h2>Interaction Design and Navigation (10 points)</h2>

            <h3>Easy to Navigate</h3>
            <ul class="activities-list">
                <li>Global navigation accessible from every page.</li>
                <li>Hierarchical dropdown menus prevent overwhelming users.</li>
                <li>Back links on content pages for easy returns.</li>
                <li>Consistent footer with links on all pages.</li>
            </ul>

            <h3>Global Navigation</h3>
            <ul class="activities-list">
                <li>Four main categories.</li>
                <li>Submenus prevent cluttered header on mobile devices.</li>
                <li>Mobile hamburger menu for screens under 768px.</li>
            </ul>

            <h3>Unique Page Titles</h3>
            <ul class="activities-list">
                <li>Active navigation links highlighted with different background color.</li>
                <li>Current page link shows .active class styling.</li>
                <li>Users can immediately identify current page location.</li>
            </ul>

        </div>

        <div class="general-details">
            <h2>HTML and CSS Validation (10 points)</h2>

            <h3>HTML5 Compliance</h3>
            <ul class="activities-list">
                <li>All pages include proper HTML5 doctype declarations.</li>
                <li>Meta charset and viewport tags present.</li>
                <li>Semantic HTML5 tags used appropriately.</li>
                <li>Pages validate through W3C HTML validator.</li>
            </ul>

            <h3>CSS Compliance</h3>
            <ul class="activities-list">
                <li>CSS feature used appropriately.</li>
                <li>CSS validates through W3C CSS validator.</li>
            </ul>

            <h3>Cross-Browser Compatibility</h3>
            <ul class="activities-list">
                <li>Tested in other browsers (Chrome and Safari.)</li>
                <li>Mobile browsers supported.</li>
                <li>Responsive design works accross all screen sizes.</li>
            </ul>
        </div>

        <div class="general-details">
            <h2>Reference Page (10 points)</h2>

            <h3>Separate Linked Page</h3>
            <ul class="activities-list">
                <li>citations.html created as separate page.</li>
                <li>Linked from footer on all pages.</li>
                <li>Accessible from site navigator.</li>
            </ul>

            <h3>Complete Citations</h3>
            <ul class="activities-list">
                <li>12 image sources fully cited</li>
                <li>Each citation includes: source URL, last updated, what was taken, and where the image is shown on the site.</li>
                <li>All links are functional.</li>
                <li>Sources organized by category for easy reference.</li>
            </ul>
        </div>

        <div class="general-details">
            <h2>Grading Page Documentation (10 points)</h2>

            <h3>Document what you have done</h3>
            <p>This page thoroughly documents all project work:</p>
            <ul class="activities-list">
                <li>Design and quality.</li>
                <li>Quantity of content (13 pages.)</li>
                <li>Code design requirements.</li>
                <li>Interaction design and navigation features.</li>
                <li>HTML and CSS validation details.</li>
                <li>Reference page documentation.</li>
                <li>Responsive design implementation.</li>
                <li>Extra features and enhancements.</li>
            </ul>

            <h3>Linked from Homepage</h3>
            <ul class="activities-list">
                <li>Link to grading.html available in footer on all pages.</li>
                <li>Labeled as "Project Documentation."</li>
                <li>Easily accessible to professor for review.</li>
            </ul>
        </div>

        <div class="general-details">
            <h2>Responsive Web Design (5 points)</h2>

            <h3>Mobile Users Considered</h3>
            <ul class="activities-list">
                <li>Viewport meta tag ensures proper scaling on mobile devices.</li>
                <li>Hamburger menu toggle for navigation on screens under 768px.</li>
                <li>Responsive grid layouts adapt from 2 columns to 1 column on mobile.</li>
                <li>Images scale responsively with max-width: 100%.</li>
                <li>Touch friendly button sizes and spacing.</li>
                <li>Media queries for tablet (768px) and mobile (480px) breakpoints.</li>
            </ul>

            <h3>Responsive Breakpoints</h3>
            <ul class="activities-list">
                <li>Desktop: Full multi-column layouts, visible navigation.</li>
                <li>Tablets: Single column layouts, hamburger menu visible.</li>
                <li>Mobile: Smaller font sizes, reduced padding, simplified layouts.</li>
                <li>All content is accessible and readable on all screens.</li>
            </ul>
        </div>

        <div class="general-details">
            <h2>Extra Features and Enhancements</h2>

            <h3>1. Cherry Blossom Theme</h3>
            <p>Cohesive design theme reflecting D.C. and its cherry blossoms.</p>

            <h3>2. Multiple Independent Carousels</h3>
            <p>Learned more of JS to implement supporting multiple carousels on single pages with independent auto rotations and navigation.</p>

            <h3>3. Typography</h3>
            <p>Fonts chosen show elegance, proper line height for readability, consistent font sizing.</p>

            <h3>4. Interactive Elements</h3>
            <p>Hover effects on buttons and cards, smooth transitions, dropdown menus, active navigation states provide visual feedback.</p>

            <h3>5. Personal Narrative Integration</h3>
            <p>Story.html tells a personal story.</p>
        </div>

        <div class="general-details">
            <h2>Images Sources</h2>
            <p>All images used in this project are sourced publicly available websites and properly cited on the Works Cited page.</p>
            <p>Other pictures shown that aren't linked in Work Cited, are from my own personal device, taken by the author (Anahy Ramirez.)</p>
        </div>

        <div class="general-details">
            <h2>Part 2 Specific Requirements</h2>

            <h3>Original JavaScript (10 points)</h3>
            <ul class="activities-list">
                <li><strong>Form Validation:</strong> Complete custom JavaScript validation without HTML5 required.</li>
                <li><strong>Character Counter:</strong> Real-time character counting for textarea.</li>
                <li><strong>Email Validation:</strong> Custom regex pattern for email format checking.</li>
                <li><strong>Error Display Functions:</strong> showError() and clearError() functions.</li>
                <li><strong>Null Safety:</strong> Proper checks to prevent errors on pages without forms.</li>
                <li><strong>Carousel System:</strong> Proper checks to prevent errors on pages without forms.</li>
                <li><strong>Hamburger Menu:</strong> Mobile navigation toggle functionality.</li>
            </ul>

            <h3>DHTML Component (10 points)</h3>
            <ul class="activities-list">
                <li><strong>Dynamic Error Messages:</strong> JavaScript dynamically creates and displays error messages based on validation.</li>
                <li><strong>Character Counter Update:</strong> DOM manipulation to update character count in real-time.</li>
                <li><strong>Form Submission Control:</strong> JavaScript prevents form submission if validation fails.</li>
                <li><strong>Menu Toggle:</strong> Dynamic display property changes for mobile menu.</li>
                <li><strong>Submenu Expansion:</strong> Dynamic showing/hiding of dropdown submenus.</li>
                <li><strong>Success/Error Display:</strong> PHP dynamically displays success or error messages after form submission.</li>
            </ul>

            <h3>PHP Includes (10 points)</h3>
            <ul class="activities-list">
                <li><strong>header.inc.php:</strong> Contains all header HTML, navigation, and meta tags - included on every page.</li>
                <li><strong>footer.inc.php:</strong> Contains footer content and closing HTML tags - included on every page.</li>
                <li><strong>No Repeated Code:</strong> Navigation structure written only once in header.inc.php. and footer.inc.php.</li>
                <li><strong>Dynamic Variables:</strong> $pageTitle and $basePath variables set per page.</li>
                <li><strong>Consistent Structure:</strong> All pages follow same include pattern.</li>
                <li><strong>Easy Maintenance:</strong> Site-wide changes made in one file affect all pages.</li>
            </ul>

            <h3>Comment Form - INSERT and SELECT (10 points)</h3>
            <ul class="activities-list">
                <li><strong>Form Fields:</strong> Name, email, rating (1-5 stars), comment textarea.</li>
                <li><strong>INSERT Operation:</strong> Prepared statement inserts validated data into dc_comments table.</li>
                <li><strong>SELECT Operation:</strong> Query retrieves all comments ordered by date (newest first).</li>
                <li><strong>Display Comments:</strong> All existing comments shown below the form.</li>
                <li><strong>Database Table:</strong> dc_comments with 6 columns (id, name, email, comment, rating, date).</li>
                <li><strong>Prepared Statements:</strong> bind_param() used for secure data insertion.</li>
                <li><strong>Success Feedback:</strong> Confirmation message displayed after successful submission.</li>
            </ul>

            <h3>Form Validation - JavaScript & PHP (10 points)</h3>
            <ul class="activities-list">
                <li><strong>JavaScript Validation (Client-Side):</strong>
                    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
                        <li>Prevents form submission if validation fails.</li>
                        <li>No HTML5 required attributes used.</li>
                        <li>Custom validation functions for each field.</li>
                        <li>Clear error messages displayed to user.</li>
                        <li>Email format validation with regex.</li>
                        <li>Character length validation (name, comment).</li>
                        <li>Rating selection validation.</li>
                    </ul>
                </li>
                <li><strong>PHP Sanitization (Server-Side):</strong>
                    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
                        <li>trim() removes whitespace from all inputs.</li>
                        <li>htmlspecialchars() prevents XSS attacks.</li>
                        <li>filter_var() validates email format.</li>
                        <li>intval() ensures rating is an integer.</li>
                        <li>strlen() checks character length.</li>
                    </ul>
                </li>
            </ul>

            <h3>PHP Validates and Sanitizes Before INSERT (10 points)</h3>
            <ul class="activities-list">
                <li><strong>Server-Side Validation:</strong>
                    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
                        <li>Checks if name is empty or exceeds 100 characters.</li>
                        <li>Validates email format with filter_var().</li>
                        <li>Ensures comment is between 10 and 1000 characters.</li>
                        <li>Validates rating is between 1 and 5.</li>
                        <li>Builds error array if validation fails.</li>
                    </ul>
                </li>
                <li><strong>Data Sanitization:</strong>
                    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
                        <li>All inputs sanitized with htmlspecialchars() before INSERT.</li>
                        <li>ENT_QUOTES flag prevents quote injection.</li>
                        <li>UTF-8 encoding specified for character safety.</li>
                    </ul>
                </li>
                <li><strong>Prepared Statements:</strong>
                    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
                        <li>MySQLi prepared statement prevents SQL injection.</li>
                        <li>Parameter binding with bind_param("sssi", ...).</li>
                        <li>Data only inserted if validation passes.</li>
                        <li>Error handling with if/else for execute().</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="general-details">
            <h2>EXTRAS - Beyond Requirements (15 points)</h2>
            <p>This project includes several features that go beyond the basic requirements:</p>

            <h3>1. Advanced Carousel System</h3>
            <ul class="activities-list">
                <li>Multiple independent carousels on single pages (story.php has 3 separate carousels).</li>
                <li>Auto-rotation every 5 seconds.</li>
                <li>Manual navigation with dot indicators.</li>
                <li>Active dot highlighting.</li>
                <li>Smooth CSS transitions.</li>
                <li>Custom JavaScript function that initializes all carousels dynamically.</li>
            </ul>

            <h3>2. Comprehensive Theme Design</h3>
            <ul class="activities-list">
                <li>Cherry blossom theme consistently applied throughout entire site.</li>
                <li>Custom color palette (navy blue #1a237e, pink #c2185b).</li>
                <li>Gradient backgrounds on headers and buttons.</li>
                <li>Coordinated hover effects on all interactive elements.</li>
                <li>Professional typography with Georgia serif font.</li>
            </ul>

            <h3>3. User Experience Enhancements</h3>
            <ul class="activities-list">
                <li>Real-time character counter on comment textarea.</li>
                <li>Star rating system with emoji display (⭐).</li>
                <li>Color-coded success (green) and error (red) messages.</li>
                <li>Formatted date display for comments.</li>
                <li>Back links on every content page for easy navigation.</li>
                <li>Touch-friendly button sizes on mobile.</li>
            </ul>

            <h3>4. Advanced CSS Techniques</h3>
            <ul class="activities-list">
                <li>CSS Grid and Flexbox layouts throughout.</li>
                <li>Multiple media query breakpoints (768px, 480px).</li>
                <li>Custom card components with hover effects.</li>
                <li>Responsive images that scale properly.</li>
                <li>Box shadows and border radius for depth.</li>
                <li>Smooth transitions on all interactive elements.</li>
            </ul>

            <h3>5. Security Best Practices</h3>
            <ul class="activities-list">
                <li>MySQLi prepared statements (not deprecated mysql functions).</li>
                <li>Parameter binding prevents SQL injection.</li>
                <li>htmlspecialchars() prevents XSS attacks.</li>
                <li>Both client and server-side validation.</li>
                <li>Email format validation.</li>
                <li>Input length restrictions.</li>
            </ul>

            <h3>6. Code Organization</h3>
            <ul class="activities-list">
                <li>Modular PHP includes (header.inc.php, footer.inc.php).</li>
                <li>Single CSS file for entire site.</li>
                <li>Single JavaScript file with modular functions.</li>
                <li>Consistent naming conventions.</li>
                <li>Comments throughout code explaining functionality.</li>
                <li>Proper indentation and formatting.</li>
            </ul>

            <h3>7. Personal Content</h3>
            <ul class="activities-list">
                <li>Personal narrative on story.php with 3 sections (Salvadoran, Texas, D.C. roots).</li>
                <li>Personal photos from author's own collection.</li>
                <li>Authentic descriptions based on real experience living in D.C..</li>
                <li>Personal restaurant recommendations.</li>
                <li>Cultural insights from Latino/Salvadoran perspective.</li>
            </ul>

            <h3>8. Comprehensive Documentation</h3>
            <ul class="activities-list">
                <li>Detailed grading.php page documenting all features.</li>
                <li>Complete citations.php with 12+ sourced images.</li>
                <li>Comments in HTML, CSS, JavaScript, and PHP code.</li>
                <li>Clear documentation of Part 1 and Part 2 features.</li>
            </ul>
        </div>
    </main>


    <script src="assets/js/script.js"></script>
<?php
    include 'assets/inc/footer.inc.php';
?>