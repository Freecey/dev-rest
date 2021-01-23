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
    } // else {
       // animation.remove('.navTaxonomy__item');
    // }
});