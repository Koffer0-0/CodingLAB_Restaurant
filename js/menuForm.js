$(document).ready(function() {
    $('input:radio[name=formRadio]').change(function() {

        if (this.value == 'delivery') 
        {
            $("#pickupBlock1").hide();
            $("#deliveryBlock1").show();
            $("#deliveryBlock2").show();
        }
        if (this.value == 'pickup') 
        {
            $("#deliveryBlock1").hide();
            $("#deliveryBlock2").hide();
            $("#pickupBlock1").show();
        }
    });
});