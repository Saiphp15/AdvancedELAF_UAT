$(document).ready(function () {
    $("#discountTypeList").change(function () {

        var percString = "perc";
        var amtString = "amt";

        var dtlOptionSelected = $("#discountTypeList option:selected").val();

        if (dtlOptionSelected == percString) {
            $("#dTypeInput").css("display", "block");
        }

        else {
            $("#dTypeInput").css("display", "none");
        }
    })

    $("#couponForList").change(function () {

        var ovString = "ordersOver";
        var catString = "category";
        var prodString = "product";

        var cflOptionSelected = $("#couponForList option:selected").val();

        if (cflOptionSelected == ovString) {
            $("#minAppAmt").css("display", "block");
            $("#couponCategory").css("display", "none");
            $("#couponProduct").css("display", "none");
        }



        else if (cflOptionSelected == catString) {
            $("#couponCategory").css("display", "block");
            $("#minAppAmt").css("display", "none");
            $("#couponProduct").css("display", "none");
        }



        else if (cflOptionSelected == prodString) {
            $("#couponProduct").css("display", "block");
            $("#minAppAmt").css("display", "none");
            $("#couponCategory").css("display", "none");
        }

        else {
            $("#minAppAmt").css("display", "none");
            $("#couponCategory").css("display", "none");
            $("#couponProduct").css("display", "none");
        }
    })

    $("#billingShippingCheck").change(function () {
        if ($(this).is(':checked')) {
            $('#userShippingAddress').hide();
        }
        else {
            $('#userShippingAddress').show();
        }
    })

    $('#fixedTaxInput').hide();
    $('#specificTaxInput').hide();

    $("#taxOptionList").change(function () {

        var fixedTaxString = "fixedTax";
        var specificTaxString = "specificTax";

        var taxOptionSelected = $("#taxOptionList option:selected").val();

        if (taxOptionSelected == fixedTaxString) {
            $("#fixedTaxInput").show();
            $('#specificTaxInput').hide();
        }

        else if (taxOptionSelected == specificTaxString) {
            $("#specificTaxInput").show();
            $('#fixedTaxInput').hide();
        }

        else {
            $('#fixedTaxInput').hide();
            $('#specificTaxInput').hide();
        }

    })

    $('#orderPriceSettingForm').hide();
    $('#orderWeightSettingForm').hide();

    $("#shippingRateList").change(function () {
        var orderPriceString = "orderPrice";
        var orderWeightString = "orderWeight";

        var orderRateTypeSelected = $("#shippingRateList option:selected").val();

        if (orderRateTypeSelected == orderPriceString) {
            $('#orderPriceSettingForm').show();
            $('#orderWeightSettingForm').hide();
        }

        else if (orderRateTypeSelected == orderWeightString) {
            $('#orderWeightSettingForm').show();
            $('#orderPriceSettingForm').hide();
        }

        else {
            $('#orderPriceSettingForm').hide();
            $('#orderWeightSettingForm').hide();
        }
    })

    $('#aramexShippingDetails').hide();

    $("#aramexShippingCheck").change(function () {
        if ($(this).is(':checked')) {
            $('#aramexShippingDetails').show();
        }
        else {
            $('#aramexShippingDetails').hide();
        }
    })

    $('#payTabsPaymentForm').hide();
    $('#hyperPayForm').hide();
    $('#payPalForm').hide();

    $("#paymentMethodList").change(function () {

        var payTabsString = "payTabsPayment";
        var hyperPayString = "hyperPayPayment";
        var payPalString = "payPalPayment";

        var paymentMethodSelected = $("#paymentMethodList option:selected").val();

        if (paymentMethodSelected == payTabsString) {
            $('#payTabsPaymentForm').show();
            $('#hyperPayForm').hide();
            $('#payPalForm').hide();
        }

        else if (paymentMethodSelected == hyperPayString) {
            $('#hyperPayForm').show();
            $('#payTabsPaymentForm').hide();
            $('#payPalForm').hide();

        }

        else if (paymentMethodSelected == payPalString) {
            $('#payPalForm').show();
            $('#payTabsPaymentForm').hide();
            $('#hyperPayForm').hide();
        }

        else {
            $('#payTabsPaymentForm').hide();
    $('#hyperPayForm').hide();
    $('#payPalForm').hide();
        }
    });

});