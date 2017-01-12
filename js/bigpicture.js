(function($) {
    $(document).ready(function() {
        $("#top-nav").mmenu({
            "offCanvas": {
                "position": "right"
            }
        });

        $('.search-toggle').click(function() {
            $('#search-form').toggleClass('closed').toggleClass('open');
            if ($('#search-form').hasClass('open')) {
                $('#query').focus();
            }
        });
    });
})(jQuery)