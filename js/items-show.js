(function($) {
    $(document).ready(function(){
        var inContainer = $("#itemfiles-nav").Chocolat({
        imageSize: "default",
        loop: true,
        container: "#itemfiles-stage",
        }).data("chocolat");
    
        inContainer.api().open()
        inContainer.api().getElem("overlay").off("click.chocolat");
    
        $(document).off("keydown.chocolat").on("keydown.chocolat", function(e) {
            if (inContainer.api().get("initialized")) {
                if (e.keyCode == 37) {
                    inContainer.api().prev()
                }
                else if (e.keyCode == 39) {
                    inContainer.api().next()
                }
            }
        });
    });
})(jQuery)