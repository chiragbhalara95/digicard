jQuery.noConflict();
jQuery(function () {
    jQuery('#enquiry-form').parsley().on('field:validated', function(e) {
        var ok = jQuery('.parsley-error').length === 0;
        jQuery('.bs-callout-info').toggleClass('hidden', !ok);
        jQuery('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('form:submit', function() {
        sendEnquiry();
        return false; // Don't submit form for this demo
    });

    /*
    jQuery('#feedback-form').parsley().on('field:validated', function() {
        var ok = jQuery('.parsley-error').length === 0;
        jQuery('.bs-callout-info').toggleClass('hidden', !ok);
        jQuery('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('form:submit', function() {
        sendFeedback();
        return false; // Don't submit form for this demo
    });
    */
});