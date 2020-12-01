$(function() {
    // hide the loading page when the page is ready
    $("body.has-loading")
        .css({
            overflow: "visible"
        })
        .find(".loading-page")
        .fadeOut(1000);

    // $("input").iCheck({
    //     checkboxClass: "icheckbox_flat-red",
    //     radioClass: "iradio_flat"
    // });
});
