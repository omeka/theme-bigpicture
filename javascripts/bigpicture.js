(function($) {
    var manageToggle = function(toggleButton, targetSelector) {
        var targetElement = $(targetSelector);
        var autocloseEvents = 'click.autoclose focusin.autoclose keydown.autoclose';
        if (toggleButton.attr('aria-expanded') == 'false') {
            toggleButton.attr('aria-expanded', 'true');
        } else {
            toggleButton.attr('aria-expanded', 'false');
        }
        targetElement.find(':focusable').first().focus();
        $(document).on('keydown.autoclose', function(e) {
            if (e.key == 'Escape') {
                toggleButton.removeClass('open').attr('aria-expanded', 'false');
                toggleButton.focus();
                $(document).off(autocloseEvents);
            };
        });
        $(document).on('click.autoclose focusin.autoclose', function(e) {
            var activeElement = targetElement.get(0);
            if (!$.contains(activeElement, e.target)) {
                if (e.target !== toggleButton[0]) {
                    toggleButton.removeClass('open').attr('aria-expanded', 'false');
                    $(document).off(autocloseEvents);
                }
            }
        });
    };

    $(document).ready(function() {
        $(document).on('click', '.menu-toggle', function() {
            manageToggle($(this), '#top-nav');
        });

        $(document).on('click', '.search-toggle', function() {
            manageToggle($(this), '#search-container');
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
        menuToggle.addEventListener('click', () => {
            api.open();
        });
    }
);