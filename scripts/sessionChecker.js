let isNavigating = false;

// Set the flag when a link is clicked
document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function () {
        isNavigating = true;
    });
});

window.onbeforeunload = function () {
    if (!isNavigating) {
        navigator.sendBeacon('destroy_session.php');
    }
};

// Reset the flag after the unload event
window.addEventListener('unload', function () {
    isNavigating = false;
});

window.addEventListener('beforeunload', function (event) {
    if (!isNavigating) {
        event.preventDefault();
        return 'You will have to log your name again :(';
    }
});