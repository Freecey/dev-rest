// =========== SCRIPT BURGER-MENU START ===============


    const btnMenu = document.querySelector('.logo-menu');
    const menu = document.querySelector('.liste-nav');

    btnMenu.addEventListener('click', function() {
        menu.classList.toggle('active');
    })



    const allLinks = document.querySelectorAll('.item-nav');

    allLinks.forEach(function(item) {

        item.addEventListener('click', function() {
            menu.classList.toggle('active');
        })
    })

// ================ SCRIPT BURGER-MENU END ====================


    jQuery(window).scroll(function() {

        function myFunction() {
            divnav.style.backgroundColor = "#00000064";
            // reservebtn.style.setProperty("color", "#00000064", "important");
        }

        var divnav = document.getElementById("navigation");
        var reservebtn = document.getElementById("reserve-btn");
        
        var scrollPercent = 100 * jQuery(window).scrollTop() / (jQuery(document).height() - jQuery(window).height());


        if (scrollPercent > 5) {
            myFunction()
        } else {
            divnav.style.backgroundColor = "";
            // reservebtn.style.setProperty("color", "#212529", "important");
            
        }
    });
