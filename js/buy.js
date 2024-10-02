const elements = document.querySelectorAll('.card, .diamond-card, .method');
    
elements.forEach(function(element) {
    element.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});