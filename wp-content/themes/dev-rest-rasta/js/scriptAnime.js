// animations 4 title >>
if (screen.width >= 600) {
    anime({
        targets: '.animeTitle',
        translateX: [-850, 0],
        opacity: [0, 1],
        duration: 3000,
        easing: 'easeOutElastic(1, .5)'
    });
} else if (screen.width <= 600 && screen.width >= 400) {
    anime({
        targets: '.animeTitle',
        translateX: [-510, 0],
        opacity: [0, 1],
        duration: 3000,
    });
} else if (screen.width <= 400) {
    anime({
        targets: '.animeTitle',
        translateX: [-380, 0],
        opacity: [0, 1],
        duration: 3000,
    });
}
anime({
    targets: '.animeSubtitle',
    rotateX: [90, 0],
    opacity: [0, 1],
    duration: 2000,
    delay: 1500,
});

// animations 4 navs taxonomy >>
jQuery(window).scroll(function() {
    function myFunction() {
        anime({
            targets: '.navTaxonomy__item',
            translateY: [90, 0],
            duration: 2000,
            delay: anime.stagger(100, { from: 'center' })
        });
    }
    const scrollPercent = 100 * jQuery(window).scrollTop() / (jQuery(document).height() - jQuery(window).height());
    if (scrollPercent >= 1 && scrollPercent <= 2) {
        myFunction()
    } else {
        return;
    }
});

// animations 4 others >>
document.querySelector(".heroBanner__linkRow--link").addEventListener("mouseover", () => {
    anime({
        targets: '.lineBefore',
        scaleX: [1, 0],
        opacity: [1, 0],
        duration: 500
    });
});
document.querySelector(".heroBanner__linkRow--link").addEventListener("mouseout", () => {
    anime({
        targets: '.lineBefore',
        scaleX: [0, 1],
        opacity: [0, 1],
        duration: 500
    });
});


