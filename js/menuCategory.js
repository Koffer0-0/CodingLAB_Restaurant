$(function() {

    let filter = $("[data-filter]");

    filter.on("click", function(event) {
        event.preventDefault();

        let category = $(this).data('filter');

        if(category == 'all') {
            $("[data-category]").removeClass("d-none");
        } else {
            $("[data-category]").each(function() {
                let workCat = $(this).data('category');


                if(workCat != category) {
                    $(this).addClass('d-none');
                } else { 
                    $(this).removeClass('d-none');
                }
            });
        }
    });
});
