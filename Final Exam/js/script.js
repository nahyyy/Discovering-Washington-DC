

function initializeCarousels() {
    var carousels = document.querySelectorAll('.carousel');

    carousels.forEach(function(carouselContainer) {
        var carouselImages = carouselContainer.querySelector('.carousel-images');
        var carouselControl = carouselContainer.querySelector('.carousel-controls');
        
        if(!carouselImages || !carouselControls) return;
        
        var images = carouselImages.querySelectorAll('img');
        var totalImages = images.length;

        for(var j = 0; j < totalImages; j++) {
            var control = document.createElement('button');
            control.classList.add('controls');
            control.setAttribute('data-index', j);
            if(j === 0) {
                control.classList.add('active');
            }
            carouselControl.appendChild(control);
        }

        var dots = carouselControls.querySelectorAll('.carousel-controls');
        for(var m = 0; m < dots.length; m++) {
            dots[m].addEventListener('click', function() {
                var dotIndex = parseInt(this.getAttribute('data-index'));
                goToSlide(dotIndex);
            });
        }
    });
}


// for signup and reviews
var signupField = document.getElementById('signUp');
var charCount = document.getElementById('charCount');

if(signupField && charCount) {
    commentField.addEventListener('input', function() {
        charCount.textContent = this.value.length;
    });
}

var form = document.getElementById('reviewForm');
if(form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        clearErrors();

        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var review = document.getElementById('review').value.trim();
        var rating = document.querySelector('input[name="rating"]:checked');

        var isValid = true;

        if(name === '') {
            showError('nameError', 'Name is required');
            isValid = false;
        } else if(name.length > 100) {
            showError('nameError', 'Name must be 100 characters or less');
            isValid = false;
        }

        if(email === '') {
            showError('emailError', 'Email is required');
            isValid = false;
        } else if(!isValidEmail(email)) {
            showError('emailError', 'Please enter a valid email address');
            isValid = false;
        }

        if(!rating) {
            showError('ratingError', 'Please select a rating');
            isValid = false;
        }

        if(review === '') {
            showError('reviewError', 'Review is required');
            isValid = false;
        } else if(review.length < 10) {
            showError('reviewError', 'Review must be at least 10 characters');
            isValid = false;
        } else if(review.length > 1000) {
            showError('reviewError', 'Review must be 1000 characters or less');
            isValid = false;
        }

        if(isValid) {
            form.submit();
        }
    });
}

function showError(elementId, message) {
    var errorElement = document.getElementById(elementId);
    if(errorElement) {
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }
}

function clearErrors() {
    var errorElements = document.querySelectorAll('[id$="Error"]');
    for(var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
        errorElements[i].style.display = 'none';
    }
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}