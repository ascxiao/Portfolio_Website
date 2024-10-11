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

ScrollReveal().reveal('.sprout, .', {
    distance: "25px",
    origin: "bottom",
    duration: 1000
});

ScrollReveal().reveal('.header_title, .greetings, .aboutme_button, .me_picture', {
    duration: 2000
});

ScrollReveal().reveal('.about_title, .about_text', {
    distance: "25px",
    origin: "right",
});

ScrollReveal().reveal('.contact_title, .contact_text', {
    distance: "25px",
    origin: "left",
});

ScrollReveal().reveal('.sprout_picture, .doodle', {
    distance: "25px",
    origin: "bottom",
    duration: 2000
});

ScrollReveal().reveal('.school_text, .achievement_text, .affil_text, .cg_text, .carousel1', {
    duration: 1000
});

ScrollReveal().reveal('.contact_button, .round-button, .school_container, .achievement_container, .affil_container, .cg_container, .gallery, .carousel2', {
    duration: 2000
});

ScrollReveal().reveal('.carousel3', {
    duration: 2500
});

ScrollReveal().reveal('.carousel4', {
    duration: 3000
});

$(function () {
    $("gallery").lazyload({ effect: "fadeIn" });
});
