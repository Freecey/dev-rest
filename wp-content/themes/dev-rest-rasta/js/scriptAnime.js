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

