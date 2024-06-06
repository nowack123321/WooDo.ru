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