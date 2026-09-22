// Anahy Ramirez
// 10/20/2025
// Web & Mobile 2
// Individual Project Part1


var menuToggle = document.getElementById('menuToggle');
var mainNav = document.getElementById('mainNav');

menuToggle.addEventListener('click', function() {
    mainNav.classList.toggle('active');
});

var submenus = document.querySelectorAll('.nav-item-has-submenu');

for (var i = 0; i < submenus.length; i++) {
    var button = submenus[i].querySelector('.nav-link-submenu-toggle');
    var submenu = submenus[i].querySelector('.submenu');

    button.addEventListener('click', function(e) {
        e.preventDefault();

        var parent = this.parentElement;
        var currentSubmenu = parent.querySelector('.submenu');

        if (currentSubmenu.classList.contains('active')) {
            currentSubmenu.classList.remove('active');
        } else {
            currentSubmenu.classList.add('active');
        }

    });
}

// had to fix it so the different type of carousel doesnt break depending on where i used it
function initializeCarousels() {
    var carousels = document.querySelectorAll('.carousel');

    carousels.forEach(function(carouselContainer, carouselIndex) {
        var carouselImages = carouselContainer.querySelector('.carousel-images');
        var carouselDots = carouselContainer.querySelector('.carousel-dots');
        var images = carouselImages.querySelectorAll('img');
        var totalImages = images.length;
        var currentIndex = 0;

        for (var j = 0; j < totalImages; j++) {
            var dot = document.createElement('button');
            dot.classList.add('dot');
            dot.setAttribute('data-index', j);
            if (j === 0) {
                dot.classList.add('active');
            }
            carouselDots.appendChild(dot);
        }

        var dots = carouselDots.querySelectorAll('.dot');
        for (var m = 0; m < dots.length; m++) {
            dots[m].addEventListener('click', function() {
                var dotIndex = parseInt(this.getAttribute('data-index'));
                goToSlide(dotIndex);
            });
        }
        
        function goToSlide(index) {
            currentIndex = index;
            var translateX = -currentIndex * 100;
            carouselImages.style.transform = 'translateX(' + translateX + '%)';
            
            var allDots = carouselDots.querySelectorAll('.dot');
            for (var k = 0; k < allDots.length; k++) {
                allDots[k].classList.remove('active');
            }
            allDots[currentIndex].classList.add('active');
        }
        
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalImages;
            goToSlide(currentIndex);
        }

        setInterval(nextSlide, 5000);

    });
}

// so the function works when page loads
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeCarousels);
} else {
    initializeCarousels();
}

// character counter for comments
var commentField = document.getElementById('comment');
var charCount = document.getElementById('charCount');

commentField.addEventListener('input', function() {
    charCount.textContent = this.value.length;
});

//form validation
var form = document.getElementById('commentForm');
form.addEventListener('submit', function(e) {
    e.preventDefault();

    //clear errors
    clearErrors();

    //get the values
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var comment = document.getElementById('comment').value.trim();
    var rating = document.querySelector('input[name="rating"]:checked');

    var isValid = true;

    //validate name
    if(name === '') {
        showError('nameError', 'Name is required');
        isValid = false;
    } else if(name.length > 100) {
        showError('nameError', 'Name must be 100 characters or less');
        isValid = false;
    }

    //validate email
    if(email === '') {
        showError('emailError', 'Email is required');
        isValid = false;
    } else if(!isValidEmail(email)) {
        showError('emailError', 'Please eneter a valid email address');
        isValid = false;
    }

    //rating
    if(!rating) {
        showError('ratingError', 'Please select a rating');
        isValid = false;
    }

    //comment
    if(comment === '') {
        showError('commentError', 'Comment is required');
        isValid = false;
    } else if(comment.length < 10) {
        showError('commentError', 'Comment must be at least 10 characters');
        isValid = false;
    } else if(comment.length > 1000) {
        showError('commentError', 'Comment must be 1000 characters or less');
        isValid = false;
    }

    //submittion of form, if all is correct
    if(isValid)
}