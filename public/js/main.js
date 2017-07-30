(function($){

    $(document).on("click", "#select", function () {
        $("#image").click();
    });
    $(document).on("change", "#image", function () {
        $("#filename").val($(this).val());
    })

})(jQuery);