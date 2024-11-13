(function($) {
    var manageToggle = function(toggleButton, targetSelector) {
        var targetElement = $(targetSelector);
        targetElement.toggleClass('closed').toggleClass('open');
        if (targetElement.hasClass('open')) {
            toggleButton.attr('aria-expanded', 'true');
        } else {
            toggleButton.attr('aria-expanded', 'false');
        }
        targetElement.find(':focusable').first().focus();
    };

    $(document).ready(function() {
        $(document).on('click', '.menu-toggle', function() {
            manageToggle($(this), '#top-nav');
        });

        $(document).on('click', '.search-toggle', function() {
            manageToggle($(this), '#search-form');
        });

        $(document).on('click', '.advanced-toggle', function() {
            manageToggle($(this), '#advanced-form');
        });

        $(document).on('click', '.mobile-toggle', function() {
            manageToggle($(this), '#collection-metadata');
        });
    });
})(jQuery)

document.addEventListener(
    "DOMContentLoaded", () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const menuPanel = document.querySelector('#top-nav');
        const menu = new Mmenu( "#top-nav", {
            hooks: {
                'open:after': () =>{
                    menuToggle.setAttribute('aria-expanded', 'true');
                    menuPanel.setAttribute('aria-expanded', 'true');
                },
                'close:after': () =>{
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuPanel.setAttribute('aria-expanded', 'false');
                },
            },
            "offCanvas": {
                position: "right"
            },
            "navbars": [
                {
                    "position": "top",
                    "content": [
                    "breadcrumbs",
                    "close"
                    ]
                }
            ]
        });

        const api = menu.API;

    }
);