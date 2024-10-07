
setInterval(function () {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    var hour = today.getHours();
    var minute = today.getMinutes();

    if (hour < 10) {
        hour = '0' + hour;
    }

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById("date").innerHTML = today;

    if (minute < 10) {
        minute = '0' + minute;
    }

    if (hour < 12) {
        time = hour + ':' + minute + ' AM';
    } else {
        time = hour + ':' + minute + ' PM';
    }
    document.getElementById("time").innerHTML = time;
}, 250);

ScrollReveal().reveal('.swirl3', {
    distance: "50px",
    origin: "left",
    duration: 2000
});

ScrollReveal().reveal('.swirl2', {
    distance: "50px",
    origin: "right",
    duration: 2500
});

ScrollReveal().reveal('.swirl1', {
    distance: "50px",
    origin: "left",
    duration: 3000
});

ScrollReveal().reveal('.sprout', {
    distance: "25px",
    origin: "bottom",
    duration: 1000
});

ScrollReveal().reveal('.header_title, .greetings, .aboutme_button, .me_picture', {
    distance: "25px",
    origin: "left",
    duration: 2000
});

ScrollReveal().reveal('.about_title', {
    distance: "25px",
    origin: "right",
});

ScrollReveal().reveal('.about_text', {
    distance: "25px",
    origin: "right",
});

ScrollReveal().reveal('.contact_title', {
    distance: "25px",
    origin: "left",
});

ScrollReveal().reveal('.contact_text', {
    distance: "25px",
    origin: "left",
});

ScrollReveal().reveal('.sprout_picture', {
    distance: "25px",
    origin: "bottom",
    duration: 2000
});

ScrollReveal().reveal('.contact_button', {
    duration: 1000
});