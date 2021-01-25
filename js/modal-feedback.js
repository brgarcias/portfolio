//modal
$(document).on('click', '.open-options', function (event) {
    event.preventDefault();
    $('#modal-options').iziModal('open');
});
$('#modal-options').iziModal({
    headerColor: '#5c5edc',
    width: '65%',
    overlayColor: 'rgba(0, 0, 0, 0.5)',
    fullscreen: true,
    transitionIn: 'fadeInUp',
    transitionOut: 'fadeOutDown',
    theme: 'dark'
});


(function ($) {
    function floatLabel(inputType) {
        $(inputType).each(function () {
            var input = $(this).find("input, select, textarea");
            var label = $(this).find("label");
            // on focus add class active to label
            input.focus(function () {
                label.addClass("active");
                console.log("focus");
            });
            //on blur check field and remove class if needed
            input.blur(function () {
                if (input.val() === '' || input.val() === 'blank') {
                    label.removeClass();
                }
            });
        });
    }
    // just add a class of "floatLabel to any group you want to have the float label interactivity"
    floatLabel(".float-label");
})(jQuery);