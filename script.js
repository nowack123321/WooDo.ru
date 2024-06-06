const slides = document.querySelectorAll('.slide');
    let currentSlideIndex = 0;
    function showSlide(index) {
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        slides[index].classList.add('active');
    }
    function startSlideshow() {
        showSlide(currentSlideIndex);
        currentSlideIndex++;
        if (currentSlideIndex >= slides.length) {
            currentSlideIndex = 0;
        }
        setTimeout(startSlideshow, 6000);
    }
    startSlideshow();

    function toggleForm() {
        const form = document.getElementById("callbackForm");
        form.style.display = form.style.display === "none" ? "block" : "none";
    }
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.getElementById('logo');
        const logoMenuContainer = document.getElementById('logoMenuContainer');
    
        logo.addEventListener('click', function() {
            if (logoMenuContainer.style.display === 'none') {
                logoMenuContainer.style.display = 'block';
            } else {
                logoMenuContainer.style.display = 'none';
            }
        });
    
        document.addEventListener('click', function(event) {
            if (!logo.contains(event.target)) {
                logoMenuContainer.style.display = 'none';
            }
        });
    });







    
















   
  