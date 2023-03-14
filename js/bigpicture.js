(function($) {
    $(document).ready(function() {
        $('.menu-toggle').click(function() {
            $('#top-nav').focus();
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
        new Mmenu( "#top-nav", {
            offCanvas: {
                position: "right"
            },
        }, {
            sidebar: {
                expanded: {
                    use: 800,
                },
            },
            offCanvas: {
                page:{selector:"#wrap"},
            },
        });
    }
);