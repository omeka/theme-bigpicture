(function($) {
    $(document).ready(function() {
        $('.menu-toggle').click(function() {
            $(this).attr('aria-expanded', 'true');
        });

        $('.search-toggle').click(function() {
            $('#search-form').toggleClass('closed').toggleClass('open');
            if ($('#search-form').hasClass('open')) {
                $('#query').focus();
            }
        });

        $('.advanced-toggle').click(function() {
            $('#advanced-form').toggleClass('closed').toggleClass('open');
        });

        $('.collection-meta .mobile-toggle').click(function(e) {
            e.preventDefault();
            $('.collection-meta .closed, .collection-meta .open').toggleClass('closed').toggleClass('open');
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