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